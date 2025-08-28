<?php
include 'config.php';

function send($BOT_TOKEN, $parameters, $method) {
    $apiUrl =  "https://api.telegram.org/bot{$BOT_TOKEN}/{$method}";
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL, $apiUrl);
    curl_setopt($ch,CURLOPT_POST, count($parameters) );
    curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($parameters) );
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    echo $result;
}