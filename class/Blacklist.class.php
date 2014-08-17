<?php
include_once 'DataBase.class.php';
class Blacklist extends DataBase {
	private $ip;
	
	public function __construct($ip) {
		parent::__construct();
		$this->ip = $ip;
	}
	
	public function inDB() {
		$result = $this->db->select("blacklist", "ip = '{$this->ip}'", "", "`id`");
		$result = array_filter($result);
		return !empty($result);
	}
	
	public function add() {
		$insert = array('id' => null, 'ip' => $this->ip);
		if(!$this->inDB())
		{
			$this->db->insert("blacklist", $insert);
			return true;
		}
		else
			return false;
	}
}
?>