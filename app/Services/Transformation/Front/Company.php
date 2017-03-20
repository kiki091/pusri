<?php

namespace App\Services\Transformation\Front;

use App\Custom\PusriHelper;
 
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

        /*$company['desktop'] = $this->setCompanyForLandingDesktopTransform($data);
        $company['mobile'] = $this->setCompanyForLandingMobileTransform($data);*/
        
        return $this->setCompanyForLandingTransform($data);
    }

    protected function setCompanyForLandingTransform($data)
    {
    	$dataTransform['title'] = isset($data['translation']['title']) ? $data['translation']['title'] : '';
    	$dataTransform['side_description'] = isset($data['translation']['side_description']) ? $data['translation']['side_description'] : '';

        if(PusriHelper::getCurrentLanguageKey() == "id")
        {
    	   $dataTransform['description_left'] = isset($data['translation']['description']) ? substr($data['translation']['description'],0,681) : '';
    	   $dataTransform['description_right'] = isset($data['translation']['description']) ? substr($data['translation']['description'],681,620) : '';
        }else {
            $dataTransform['description_left'] = isset($data['translation']['description']) ? substr($data['translation']['description'],0,713) : '';
            $dataTransform['description_right'] = isset($data['translation']['description']) ? substr($data['translation']['description'],713,620) : '';
        }
    	return $dataTransform;
    }
}