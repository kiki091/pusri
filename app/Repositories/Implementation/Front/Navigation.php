<?php

namespace App\Repositories\Implementation\Front;

use App\Repositories\Contracts\Front\Navigation as NavigationInterface;
use App\Repositories\Implementation\BaseImplementation;
use App\Models\Navigation as NavigationServices;
use App\Models\NavigationTrans as NavigationTransServices;
use App\Models\SubNavigation as SubNavigationServices;
use App\Models\SubNavigationTrans as SubNavigationServicesTrans;
use App\Services\Transformation\Front\Navigation as NavigationTransformation;
use Cache;
use Session;
use DB;

class Navigation extends BaseImplementation implements NavigationInterface
{
	protected $message;
    protected $navigation;
    protected $navigationTrans;
    protected $subNavigation;
    protected $subNavigationTrans;
    protected $navigationTransformation;


    function __construct(NavigationServices $navigation, NavigationTransServices $navigationTrans, SubNavigationServices $subNavigation, SubNavigationServicesTrans $subNavigationTrans, NavigationTransformation $navigationTransformation)
    {
    	$this->navigation = $navigation;
    	$this->navigationTrans = $navigationTrans;
    	$this->subNavigation = $subNavigation;
    	$this->subNavigationTrans = $subNavigationTrans;
    	$this->navigationTransformation = $navigationTransformation;
    }

    public function getNavigation()
    {
    	$data = [
    		'is_active' => true,
    	];

    	$navigationData = $this->navigation($data, 'asc', 'array', true);
       	//$subNavigationData = $this->subNavigation('', $navigationData);
        
        return $this->navigationTransformation->getNavigationTransform($navigationData);
    }

    /**
     * Get All Data
     * Warning: this function doesn't redis cache
     * @param array $params
     * @return array
     */
    protected function navigation($data = array(), $orderType = 'asc', $returnType = 'array', $returnSingle = false)
    {
    	$navigation = $this->navigation
            ->with('menu_tran')
            ->with('menu_trans')
            ->with('sub_menu');

        if(isset($data['is_active'])) {
            $navigation->isActive($data['is_active']);
        }

        if(isset($params['order_by'])) {
            $navigation->orderBy($params['order_by'], $orderType);
        } else {
            $navigation->orderBy('order', $orderType);
        }

        if(isset($params['slug'])) {
            $navigation->slug($params['slug'], $orderType);
        }

        if(!$navigation->count())
            return array();

        switch ($returnType) {
            case 'array':
                if($returnSingle) 
                {
                    return $navigation->get()->toArray();
                } 
                else 
                {
                    return $navigation->first()->toArray();
                }

            break;
        }
    }

    /**
     * Get Data Sub Navigation
     * Warning: this function doesn't redis cache
     * @param $data
     */
    protected function subNavigation($menuId = '', $data = array())
    {
    	if(empty($menuId) && empty($data))
            return array();

        if(empty($menuId) && !empty($data)) {
            $menuId = isset($data['id']) ? $data['id'] : '';
        }

        $related = $this->subNavigation
            ->with('sub_menu_trans');

        if(!$related->count())
            return array();

        return $related->get()->toArray();
    }
}
