<?php
class Language {

	private $lang;
	private static $data;
	private $default = 'pl';
	
	public function __construct($arg) {
		$langs = scandir('../configs/lang/');
		$lang = sprintf('lang_%s.conf', $arg);
		$this->lang = in_array($lang, $langs) ? $arg : $default;
		$this->loadConfig();
	}
	
	public function load($section, $name) {
        if(array_key_exists($section, self::$data))
        {
            if($name && array_key_exists($name, self::$data[$section]))
                return self::$data[$section][$name];
            else
                return self::$data[$section];
        }
        else
            return false;
	}
	
	private function loadConfig() {
		if(self::$data === null)
        {
			$path = sprintf('../configs/langs/lang_%s.conf', $this->lang);
            self::$data = parse_ini_file($path, true);
            if(self::$data === false)
            {
				throw new Exception("Configuration file missing/corrupt.");
				return false;
            }
			return true;
        }
	}
}