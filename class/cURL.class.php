<?php
class cURL {
	public static function get_url($url, $return=true)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 120);
		$tmp = curl_exec($ch);
		curl_close($ch);
		if($return)
			return $tmp;
		else
			return (isset($tmp) || $tmp != null) ? true : false;
	}
}