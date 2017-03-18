<?php

namespace App\Repositories\Implementation;

use LaravelLocalization;
use Request;
use Session;
use Cache;
use Artisan;
use Auth;

class BaseImplementation
{

    /**
     * Get Current Locale
     * @return mixed
     */
    public function getCurrentLocalize()
    {
        $currentLocale  = LaravelLocalization::getCurrentLocale();
        return $currentLocale;
    }

    /**
     * Get Support Locale
     * @return mixed
     */
    public function getSupportedLanguagesKeys()
    {
        $supportLocale  = LaravelLocalization::getSupportedLanguagesKeys();
        return $supportLocale;
    }

	/**
     * Set Response
     * @param string $message
     * @param bool $status
     * @return \Illuminate\Http\JsonResponse
     */
    protected function setResponse($message = '', $status = true, $data = array())
    {
        return response()->json(['message' => $message, 'status' => $status, 'data' => $data]);
    }
    /**
     * Get My IP Address
     * @return mixed
     */
    protected function getMyIp()
    {
        return Request::ip();
    }

    /**
     * Get User ID
     * @return mixed
     */
    protected function getUserId()
    {
        return Auth::id();
    }

    /**
     * MySql Date Time Format
     */
    protected function mysqlDateTimeFormat($date = '', $strtotime = false)
    {
        if (empty($date)) {
            return date('Y-m-d H:i:s');
        } else {
            if ($strtotime) {
                return date('Y-m-d H:i:s', $date);
            } else {
                return date('Y-m-d H:i:s', strtotime($date));
            }
        }
    }
}