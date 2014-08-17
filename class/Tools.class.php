<?php
require_once 'Config.class.php';
class Tools {

	public static function Domain($domain) {
		return gethostbyname($domain);
	}
	
	public static function Skype($user) {
		$api = sprintf(Config::getParam('api', 'api_skype'), Config::getParam('api', 'api_key'), $user);
		$ch = curl_init($api);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
	
	public static function Isdown($domain) {
		if(!filter_var($domain, FILTER_VALIDATE_URL))
        {
            return false;
        }
        $curlInit = curl_init($domain);
        curl_setopt($curlInit,CURLOPT_CONNECTTIMEOUT,10);
        curl_setopt($curlInit,CURLOPT_HEADER,true);
        curl_setopt($curlInit,CURLOPT_NOBODY,true);
        curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,true);
        $response = curl_exec($curlInit);
        curl_close($curlInit);
		if ($response) return true;
		return false;
	}
}