<?php
include 'config.php';

$data = file_get_contents('php://input');
$logFile = "webhooksentdata.json";
$log = fopen($logFile,"a");
fwrite($log, $data);
fclose($log);

$getData = json_decode($data,true);
$userId = $getData['message']['from']['id'];
$userMessage = $getData['message']['text'];

if ($userMessage=="Hi" || $userMessage=="Hello" || $userMessage=="hi" || $userMessage=="hello") {
    $botMessage = "Hi There! How can I help you?";
}elseif($userMessage=="How are you?" || $userMessage=="how are you?" || $userMessage=="How are you" || $userMessage=="how are you") {
    $botMessage = "I'm fine thanks. How about you?";
}else{
    $botMessage = "I don't undestand what you mean";
}

$parameters = array(
    "chat_id" => $userId,
    "text" => $botMessage,
    "parse_mode" => "html" 
);

$apiUrl =  "https://api.telegram.org/bot{$BOT_TOKEN}/sendMessage";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $apiUrl);
curl_setopt($ch,CURLOPT_POST, count($parameters) );
curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($parameters) );
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

echo $result;