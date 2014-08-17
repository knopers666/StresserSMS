<?php
require_once '../class/Crypt.class.php';
require_once '../class/AttackStatus.class.php';
$id = @$_POST['id'];
if(empty($id))
	echo json_encode(array('result' => false, 'msg' => "Podaj identyfikator."), JSON_UNESCAPED_UNICODE);
else if(32 != strlen($id))
	echo json_encode(array('result' => false, 'msg' => "Nieprawidłowa długość identyfikator."), JSON_UNESCAPED_UNICODE);
else
{
	$id = intval(Crypt::encrypt_decrypt('decrypt', $id));
	if($id <= 0)
		echo json_encode(array('result' => false, 'msg' => "Nieprawidłowy identyfikator."), JSON_UNESCAPED_UNICODE);
	else
		echo (new AttackStatus($id))->status;
}
?>