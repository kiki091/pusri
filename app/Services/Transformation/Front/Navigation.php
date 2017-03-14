<?php

namespace App\Services\Transformation\Front;

class Navigation
{
	/**
     * get Data Translation
     * @param $data
     * @param $lastInsertId
     * @return array|void
     */


	public function getNavigationTransform($data)
    {
        if(!is_array($data) || empty($data))
            return array();


        return $this->setNavigationTransform($data);
    }

    protected function setNavigationTransform($data)
    {
        $dataTranform = array_map(function($data)
        {
            return [
                'menu' => $this->getNavigationTranslation($data['menu_trans']),
                'sub_menu' => $this->getSubNavigationTranslation($data['sub_menu']['sub_menu_trans'])
            ];

        },$data);

        return $dataTranform;
        
    }

    protected function getNavigationTranslation($data)
    {
    	$dataTranform = array_map(function($data)
    	{
    		return [

    			'locale'		=> isset($data['locale']) ? $data['locale'] : '',
                'title'         => isset($data['title']) ? $data['title'] : '',
                'slug'          => isset($data['slug']) ? $data['slug'] : '',
    		];
    	},$data);

        return $dataTranform;


    }

    protected function getSubNavigationTranslation($data)
    {
        
    	$dataTranform = array_map(function($data)
    	{
    		return [
    		
    			'locale'     => isset($data['locale']) ? $data['locale'] : '',
                'title'         => isset($data['title']) ? $data['title'] : '',
                'slug'          => isset($data['slug']) ? $data['slug'] : '',
    		];
    	},$data);

        return $dataTranform;
    }
}