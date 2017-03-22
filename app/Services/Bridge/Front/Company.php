<?php

namespace App\Services\Bridge\Front;

use App\Repositories\Contracts\Front\Company as CompanyInterface;

class Company
{
	protected $company;

    public function __construct(CompanyInterface $company)
    {
        $this->company = $company;
    }

    /**
     * Get Data Company Overview For Landing Page
     * @param $params
     * @return mixed
     */
    public function getDataForLanding()
    {
        return $this->company->getDataForLanding();
    }
}