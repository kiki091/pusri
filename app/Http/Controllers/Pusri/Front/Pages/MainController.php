<?php

namespace App\Http\Controllers\Pusri\Front\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use App\Services\Bridge\Front\Navigation as NavigationService;
use App\Services\Bridge\Front\MainBanner as MainBannerService;
use App\Services\Bridge\Front\Company as CompanyService;
use App\Services\Bridge\Front\Category as CategoryService;
use App\Services\Bridge\Front\NewsAndEvent as NewsAndEventService;
use App\Services\Bridge\Front\Gcg as GCGService;
use App\Services\Bridge\Front\Gp3k as Gp3kService;
use App\Services\Api\Response as ResponseService;

class MainController extends FrontController
{

	protected $navigation;
    protected $mainBanner;
    protected $company;
    protected $category;
    protected $news;
    protected $gcg;
    protected $gp3k;
    protected $response;

    const MAIN_BANNER_KEY = 'mainbanner:landing';

    public function __construct(NavigationService $navigation, MainBannerService $mainBanner, CompanyService $company, CategoryService $category, NewsAndEventService $news, GCGService $gcg, Gp3kService $gp3k, ResponseService $response)
    {

    	$this->navigation = $navigation;
        $this->mainBanner = $mainBanner;
        $this->company = $company;
        $this->category = $category;
        $this->news = $news;
        $this->gcg = $gcg;
        $this->gp3k = $gp3k;
        $this->response = $response;
    }


    public function index(Request $request)
    {
    	
        $data['main_banner'] = $this->mainBanner->getMainBanner(["key" => self::MAIN_BANNER_KEY]);
        $data['company_overview'] = $this->company->getDataForLanding();
        $data['category'] = $this->category->getCategoryForLanding();
        $data['news_event'] = $this->news->getNewsForLanding();
        $data['gcg_overview'] = $this->gcg->getGCGForLanding();
        $data['gp3k_overview'] = $this->gp3k->getGp3kForLanding();
    	//dd($data['gp3k_overview']);

        $blade = self::URL_BLADE_FRONT_SITE. '.main';
        
        if(view()->exists($blade)) {
        
            return view($blade, $data);

        }

        return abort(404);
    }
}