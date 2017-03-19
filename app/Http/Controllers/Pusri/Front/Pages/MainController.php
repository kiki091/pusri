<?php

namespace App\Http\Controllers\Pusri\Front\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use App\Services\Bridge\Front\Navigation as NavigationService;
use App\Services\Bridge\Front\MainBanner as MainBannerService;
use App\Services\Api\Response as ResponseService;

class MainController extends FrontController
{

	protected $navigation;
    protected $mainBanner;
    protected $response;

    const MAIN_BANNER_KEY = 'mainbanner:landing';

    public function __construct(NavigationService $navigation, MainBannerService $mainBanner, ResponseService $response)
    {

    	$this->navigation = $navigation;
        $this->mainBanner = $mainBanner;
        $this->response = $response;
    }


    public function index(Request $request)
    {
    	
        $data['main_banner'] = $this->mainBanner->getMainBanner(["key" => self::MAIN_BANNER_KEY]);
    	//dd($data['main_banner']);

        $blade = self::URL_BLADE_FRONT_SITE. '.main';
        
        if(view()->exists($blade)) {
        
            return view($blade, $data);

        }

        return abort(404);
    }
}