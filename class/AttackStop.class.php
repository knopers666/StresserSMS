<?php
require_once 'DataBase.class.php';
require_once '../class/Crypt.class.php';
class AttackStop extends DataBase {
	public $id;
	
	public function __construct($id) {
		$this->id = $id;
	}
	
	public function log() {
		$id = intval(Crypt::encrypt_decrypt('decrypt', $this->id));
		$update = array(
			"stopped" => 1
		);
		$bind = array(
			"id" => $id;
		);
		return $this->db->update("logs", $update, "`id` = :id", $bind);
	}
	
	public function execute() {
		$boot = str_replace("%method%", "STOP", $GLOBALS['api']);
		$ch = curl_init($boot);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$result = curl_exec($ch);
		curl_close($ch);
		return ($result == 'Attack Stopped') ? true : false;
	}
}