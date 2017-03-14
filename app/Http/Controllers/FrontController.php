<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Bridge\Front\Navigation as NavigationService;
use Illuminate\Routing\Route;

use URL;
use Session;
use JavaScript;

class FrontController extends Controller
{
	protected $navigation;

	const URL_BLADE_FRONT_SITE = 'pusri.front.pages';

	public function __construct(NavigationService $navigation)
	{
		$this->navigation = $navigation;
	}

	public function getMenuNavigation()
	{
		$menu = $this->navigation->getNavigation();

		return $menu;
	}
}