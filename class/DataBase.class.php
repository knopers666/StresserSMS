<?php
require_once 'ConfigINI.class.php';
require 'class.db.php';
abstract class DataBase {
	public $db;
	
	public function __construct() {
		$this->db = self::getDB();
	}
	
	public static function getDB() {
		return new db("mysql:host=".ConfigINI::getParam(array('database', 'hostname')).";port=".ConfigINI::getParam(array('database', 'port')).";dbname=".ConfigINI::getParam(array('database', 'database')), ConfigINI::getParam(array('database', 'username')), ConfigINI::getParam(array('database', 'password')), ConfigINI::getParam(array('database', 'table_prefix')));
	}
}