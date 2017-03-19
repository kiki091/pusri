<?php

namespace App\Services\Transformation\Front;

class Company
{
	/**
     * Get Company Overview Transformation
     * @param $data
     * @return array
     */
    public function getCompanyForLandingTransform($data)
    {
        if(!is_array($data) || empty($data))
            return array();

        return $this->setCompanyForLandingTransform($data);
    }

    protected function setCompanyForLandingTransform($data)
    {
    	$dataTransform['title'] = isset($data['translation']['title']) ? $data['translation']['title'] : '';
    	$dataTransform['side_description'] = isset($data['translation']['side_description']) ? $data['translation']['side_description'] : '';
    	$dataTransform['description_left'] = isset($data['translation']['description']) ? substr($data['translation']['description'],0,681) : '';
    	$dataTransform['description_right'] = isset($data['translation']['description']) ? substr($data['translation']['description'],681,620) : '';

    	return $dataTransform;
    }
}