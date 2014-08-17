<?php
require '../class/Tools.class.php';
$arg = @$_POST['arg'];
$tool = @$_POST['method'];
$tools = array('skype', 'domain', 'isdown');
if(empty($arg) || empty($tool))
	echo json_encode(array('result' => false, 'msg' => "Wypełnij wszystkie pola."), JSON_UNESCAPED_UNICODE );
else if(!in_array($tool, $tools))
	echo json_encode(array('result' => false, 'msg' => "Nie mamy takiego narzędzia."), JSON_UNESCAPED_UNICODE);
else if(3 > strlen($arg))
	echo json_encode(array('result' => false, 'msg' => "Argument jest za krótki."), JSON_UNESCAPED_UNICODE);
else if(strlen($arg) > 32)
	echo json_encode(array('result' => false, 'msg' => "Argument jest za długi."), JSON_UNESCAPED_UNICODE);
else
{
	switch ($tool) {
		case $tools[0]:
			$ip = Tools::Skype($arg);
			$ip = @explode('|', $ip);
			$result['result'] = (count($ip) > 1);
			$result['msg'] = ($result['result']) ? "Znalezione adresy IP dla {$arg} to {$ip[0]}" : "Nie znaleziono adresu IP dla {$arg} {$ip[0]}";
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
			break;
		case $tools[1]:
			$ip = Tools::Domain($arg);
			$result = array();
			$result['result'] = !($arg == $ip);
			$result['msg'] = ($result['result']) ? "IP domeny {$arg} jest adres {$ip}" : "Nie można znaleść adresu IP dla domeny {$arg}";
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
			break;
		case $tools[2]:
			$result = array();
			$result['result'] = Tools::Isdown($arg);
			$result['msg'] = ($result['result']) ? "Strona pod adresem {$arg} jest aktywna." : "Strona pod adresem {$arg} jest nie aktywna.";
			echo json_encode($result, JSON_UNESCAPED_UNICODE);
			break;
	}
}