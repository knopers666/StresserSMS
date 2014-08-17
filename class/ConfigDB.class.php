<?php
require_once 'Config.class.php';
require_once 'DataBase.class.php';
class ConfigDB extends DataBase implements Config {
	
	public static function getParam($args)
	{
		$db = parent::getDB();
		if(!is_array($args))
			throw new Exception("Args is not array");
		return $results = (isset($args[1]) && isset($args[2])) ? $db->select($args[0], $args[1], $args[2]) : $db->select($args[0]);
	}
}