<?php
include 'config.php';

$webHookUrl = "https://maquidev.es/telegram_bot/index.php";
$apiUrl = "https://api.telegram.org/bot{$BOT_TOKEN}/setWebhook?url={$webHookUrl}";

$response = file_get_contents($apiUrl);

echo $response;