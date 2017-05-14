<?php

namespace App\Http\Controllers\Pusri\Front\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use App\Services\Bridge\Front\Company as CompanyService;
use App\Services\Api\Response as ResponseService;

class CompanyController extends FrontController
{

    protected $companyProfile;
    protected $response;

    const MAIN_BANNER_KEY = 'mainbanner:landing';
    const SEO_LANDING_KEY = 'seo:landing';

    public function __construct(CompanyService $companyProfile, ResponseService $response)
    {

        $this->companyProfile = $companyProfile;
        $this->response = $response;
    }


    public function profile($slug)
    {
    	$data['company_profile'] = $this->companyProfile->getDetail($slug);
        dd($data['company_profile']);
        $blade = self::URL_BLADE_FRONT_SITE. '.main';
        
        if(view()->exists($blade)) {
        
            return view($blade, $data);

        }

        return abort(404);
    }
}