<?php
include 'function.php';


$parameters = array(
    "chat_id" => $CHANNEL_ID,
);

$response = send($BOT_TOKEN, $parameters, "getChat");

echo $response;