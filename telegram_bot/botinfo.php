<?php
include 'config.php';

$apiUrl = "https://api.telegram.org/bot{$BOT_TOKEN}/getMe";

$response = file_get_contents($apiUrl);

if ($response === false) {
    echo "Error obteniendo información del BOT";
    exit(0);
} else {
    $data = json_decode($response, true);
    if($data['ok']==true) {
        echo "Bot name: {$data['result']['username']}\n";
        echo "<br>";
        echo "Bot id: {$data['result']['id']}\n";
    } else {
        echo "Error obteniendo información del BOT";
        exit(0);
    }
    

}

