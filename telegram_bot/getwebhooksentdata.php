<?php
$data = file_get_contents('php://input');
$logFile = "webhooksentdata,json";
$log = fopen($logFile,"a");
fwrite($log, $data);
fclose($log);