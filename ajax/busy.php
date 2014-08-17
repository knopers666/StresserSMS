<?php
require '../class/AttackStatus.class.php';
echo json_encode(array('result' => AttackStatus::isBusy()), JSON_UNESCAPED_UNICODE);
?>