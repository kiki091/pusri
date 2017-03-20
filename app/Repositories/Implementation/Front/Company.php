<?php

namespace App\Repositories\Implementation\Front;

use App\Repositories\Contracts\Front\Company as CompanyInterface;
use App\Repositories\Implementation\BaseImplementation;
use App\Models\Company as CompanyServices;
use App\Models\CompanyTrans as CompanyTransServices;
use App\Services\Transformation\Front\Company as CompanyTransformation;
use LaravelLocalization;
use Cache;
use Session;
use DB;

class Company extends BaseImplementation implements CompanyInterface
{

    protected $company;
    protected $companyTrans;
    protected $companyTransformation;

    function __construct(CompanyServices $company, CompanyTransServices $companyTrans, CompanyTransformation $companyTransformation)
    {
    	$this->company = $company;
        $this->companyTrans = $companyTrans;
    	$this->companyTransformation = $companyTransformation;
    }

    public function getDataForLanding($params = array())
    {
    	$params = [
            "is_active" => true,
            "is_show_landing" => true,
        ];

        $companyData = $this->company($params);

        return $this->companyTransformation->getCompanyForLandingTransform($companyData);
    }

    /**
     * Get All Data Company Overview
     * Warning: this function doesn't redis cache
     * @param array $params
     * @return array
     */
    protected function company($params = array(), $orderType = 'asc', $returnType = 'array', $returnSingle = false)
    {
        $company = $this->company
            ->with('translation')
            ->with('translations');

        if(isset($params['is_active'])) {
            $company->isActive($params['is_active']);
        }

        if(!$company->count())
            return array();

        switch ($returnType) {
            case 'array':
                if($returnSingle) 
                {
                    return $company->get()->toArray();
                } 
                else 
                {
                    return $company->first()->toArray();
                }

            break;
        }
    }
}