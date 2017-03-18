<?php

namespace App\Http\Controllers\Pusri\Front\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use App\Services\Bridge\Front\Navigation as NavigationService;
use App\Services\Api\Response as ResponseService;

class MainController extends FrontController
{

	protected $navigation;
    protected $response;

    public function __construct(NavigationService $navigation, ResponseService $response)
    {

    	$this->navigation = $navigation;
        $this->response = $response;
    }


    public function index(Request $request)
    {
    	$data['top_navigation'] = $this->getTopNavigation();
        $data['navigation'] = $this->getMenuNavigation();
    	//dd($data['top_navigation']);

        $blade = self::URL_BLADE_FRONT_SITE. '.main';
        
        if(view()->exists($blade)) {
        
            return view($blade, $data);

        }

        return abort(404);
    }
}