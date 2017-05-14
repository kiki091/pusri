<?php

namespace App\Custom;

use LaravelLocalization;
use Request;
use App\Redis\MenuLocation as MenuLocationRedis;
use App\Models\Navigation as NavigationModel;
use App\Models\NavigationTrans as NavigationTransModel;
use Cache;
use Session;
use Route;

class RouteMenuLocation {

	const DEFAULT_MENU_LOCATION = '/';
	/**
     * Set Menu Location
     * @return null
     */
    public function setMenuLocation()
    {
        $menuLocation = Request::segment(1);

        if( $this->urlWithLocaleKeys() ) {
            $menuLocation = Request::segment(2);

        }

        $menuLocationCollection     = $this->getSessionMenuLocationList();

        if(empty($menuLocationCollection))
            return null;

        foreach($menuLocationCollection as $key => $value) {

            foreach ($value['menu_trans'] as $key => $val) {

                if($val['slug'] == $menuLocation) {
               
                    $isExists = true;

                    break;
                }
                $isExists = false;
            }
            
        }

        if(!$isExists) {
            
            Session::forget('current_menu_location');

            if(strpos(Request::url(), env('DOMAIN_PREFIX')) !== false) {
                $this->setSessionCurrentMenuLocation(self::DEFAULT_MENU_LOCATION);
                return null;
            }

            Session::forget('current_menu_location');
            
        }

        $this->setSessionCurrentMenuLocation($menuLocation);

        return $menuLocation;
    }

    /**
     * @return bool
     */
    private function urlWithLocaleKeys()
    {
        $supportLocale  = LaravelLocalization::getSupportedLanguagesKeys();
        $locale         = Request::segment(1);

        if( in_array($locale, $supportLocale) ) {
            return true;
        }

        return false;
    }

    /**
    * Get Session Menu Location List
    * @return array
    */
    public function getSessionMenuLocationList()
    {   
        /*
            $redisKey                       = MenuLocationRedis::MENU_LOCATION_COLLECTION;
            $menuLocationCollection     = Cache::rememberForever($redisKey, function() {

                return NavigationModel::isActive(true)->with('menu_trans')->orderBy('order','asc')->get()->toArray();

            });
        */

        $menuLocationCollection     =  NavigationModel::isActive(true)->with('menu_trans')->orderBy('order','asc')->get()->toArray();

        if(empty($menuLocationCollection))
            return null;
        return $menuLocationCollection;        

    }

    /**
     * Set Session Current Menu
     * @param $param
     */
    public function setSessionCurrentMenuLocation($param)
    {
        Session::forget('current_menu_location');
        Session::put('current_menu_location', $param);
    }

    /**
     * Get Menu Navigation
     * @return array
     */
    public function getMainMenuNavigation()
    {
        $menuNavigation     = Session::get('current_menu_navigation');

        if(empty($menuNavigation))
            return null;

        return $menuNavigation;
    }

}