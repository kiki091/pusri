<?php

namespace App\Http\Controllers\Pusri\Front\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    	$data['navigation'] = $this->navigation->getNavigation();
    	dd($data['navigation']);
    }
}