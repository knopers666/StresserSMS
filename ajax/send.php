<?php
include_once '../class/ConfigINI.class.php';
require_once '../class/AttackSender.class.php';
require_once '../class/AttackStatus.class.php';
require_once '../class/Blacklist.class.php';
$host = @$_POST['inputIP'];
$host = explode(":", $host);
$ip = @$host[0];
$port = @intval($host[1]);
$time = 320;
$method = @$_POST['inputMethod'];
$smscode = @$_POST['inputSMS'];
$client = getIpAddress();

if (isset($_SERVER["HTTP_CF_CONNECTING_IP"]))
  $client = $_SERVER["HTTP_CF_CONNECTING_IP"];

if(empty($ip) || empty($port) || empty($method) || empty($smscode))
	echo json_encode(array('result' => false, 'msg' => "Wypełnij wszystkie pola."), JSON_UNESCAPED_UNICODE);
else if(!is_int($port))
	echo json_encode(array('result' => false, 'msg' => "Port musi być liczbą."), JSON_UNESCAPED_UNICODE);
else if($port < 0 || $port > 65535)
	echo json_encode(array('result' => false, 'msg' => "Maksymalny zakres portów wynosi od 0 do 65535."), JSON_UNESCAPED_UNICODE);
else if(!in_array($method, $attacks))
	echo json_encode(array('result' => false, 'msg' => "Nie ma takiej metody ataku w naszej ofercie."), JSON_UNESCAPED_UNICODE);
else if(filter_var($ip, FILTER_VALIDATE_IP) == false)
	echo json_encode(array('result' => false, 'msg' => "Nieprawidłowy adres IP."), JSON_UNESCAPED_UNICODE);
else if(AttackStatus::isBusy())
	echo json_encode(array('result' => false, 'msg' => "Serwery są przeciążone zachowaj kod sms i poczekaj."), JSON_UNESCAPED_UNICODE);
else if((new Blacklist($ip))->inDB())
	echo json_encode(array('result' => false, 'msg' => "Ten adres IP jest dodany do czarnej listy."), JSON_UNESCAPED_UNICODE);
else
{
	$handle=fopen("http://homepay.pl/API/check_code.php?usr_id=".ConfigINI::getParam(array('payments', 'homepay_id'))."&acc_id=16760&code=".$smscode,'r');
	$check=fgets($handle,8);
	fclose($handle);
	if($check=="1")
	{
		$attack = new AttackSender($ip, $port, $client, $time, $method);
		$attack->log();
		$id = $attack->execute();
		setcookie('id', $id, time()+3600*24, "/");
		echo json_encode(array('result' => true, 'msg' => "Test został rozpoczęty. Identyfikator ataku: {$id}"), JSON_UNESCAPED_UNICODE);
	}
	elseif($check=="0")
		echo json_encode(array('result' => false, 'msg' => "Nieprawidłowy kod."), JSON_UNESCAPED_UNICODE);
	else
		echo json_encode(array('result' => false, 'msg' => "Błąd w połączeniu z operatorem."), JSON_UNESCAPED_UNICODE);   
}

function getIpAddress() {
	return (empty($_SERVER['HTTP_CLIENT_IP'])?(empty($_SERVER['HTTP_X_FORWARDED_FOR'])? $_SERVER['REMOTE_ADDR']:$_SERVER['HTTP_X_FORWARDED_FOR']):$_SERVER['HTTP_CLIENT_IP']);
}