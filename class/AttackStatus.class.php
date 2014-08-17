<?php
require_once 'Attack.class.php';
require_once 'ConfigDB.class.php';
require_once 'cURL.class.php';
class AttackStatus extends Attack {
	public $status;
	public function __construct($id) {
		try {
			parent::__construct($id);
			$this->status = json_encode(array('result' => true, 'status' => $this->getStatus()), JSON_UNESCAPED_UNICODE);
		}catch(Exception $e) {
			$this->status = json_encode(array('result' => false, 'msg' => $e->getMessage()), JSON_UNESCAPED_UNICODE);
		}
	}
	
	public function getStatus() {
		$status = array(
			'id' => $this->id,
			'target' => $this->target,
			'method' => $this->method,
			'time_boot' => $this->time_boot,
			'customer' => $this->customer,
			'stopped' => $this->stopped,
			'time_execute' => $this->time_execute
		);
		return $status;
	}
	
	public static function isBusy() {
		$apis = ConfigDB::getParam(array('apis'));
		foreach($apis as $api)
		{
			$result = cURL::get_url($api['url']);
			$msg = json_decode($api['messages'], true);
			$result = ($result == $msg['max_conc']) ? true : false;
			return $result;
		}
	}
}
?>