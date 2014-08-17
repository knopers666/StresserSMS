<?php
require 'DataBase.class.php';
abstract class Attack extends DataBase {
	public $target;
	public $port;
	public $method;
	public $time_boot;
	public $customer;
	public $stopped = false;
	public $time_execute;
	public $id;
	
	public function __construct() {
		parent::__construct();
		$args = func_get_args();
        switch (func_num_args()) {
            case 1:
				$results = $this->db->select("logs", "`id` = '{$args[0]}'");
				$results = array_filter($results);
				if(empty($results))
					throw new Exception('Nieprawidłowy indyfikator.');
				$this->id = $args[0];
				$this->load();
                break;
            case 5:
				$this->target = $args[0];
				$this->port = $args[1];
				$this->customer = $args[2];
				$this->time_boot = $args[3];
				$this->method = $args[4];
                break;
            default:
                throw new Exception("Wrong number of arguments passed to the constructor of Attack class");
        }
	}
	
	private function load() {
		$bind = array(
			":id" => $this->id
		);
		$result = $this->db->select("logs", "`id` = :id LIMIT 1", $bind);
		$info = $result[0];
		$this->target = $info['target'];
		$this->customer = $info['client'];
		$this->time_boot = $info['time'];
		$this->method = $info['method'];
		$this->stopped = ($info['stopped'] == 0) ? false : true;
		$this->time_execute =  $info['date'];
	}
}
?>