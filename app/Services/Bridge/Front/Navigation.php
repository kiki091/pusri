<?php

namespace App\Services\Bridge\Front;

use App\Repositories\Contracts\Front\Navigation as NavigationInterface;

class Navigation
{
	protected $navigation;

    public function __construct(NavigationInterface $navigation)
    {
        $this->navigation = $navigation;
    }

    /**
     * Get Data Navigation
     * @param $params
     * @return mixed
     */
    public function getNavigation()
    {
        return $this->navigation->getNavigation();
    }
}