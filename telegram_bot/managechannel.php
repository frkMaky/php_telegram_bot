<?php
include 'function.php';

// Remove User
$parameters = array(
    'chat_id' => $CHANNEL_ID,
    'user_id' => 6891154881,
);
//$response = send($BOT_TOKEN, $parameters, 'kickChatMember');

// Add User
$parameters = array(
    'chat_id' => $CHANNEL_ID,
    'user_id' => 6891154881,
);
// $response = send($BOT_TOKEN, $parameters, 'unbanChatMember');

// Generate INVITE LINK
$parameters = array(
    'chat_id' => $CHANNEL_ID,
);
//$response = send($BOT_TOKEN, $parameters, 'exportChatInviteLink');

// Generate  AN EXPIRE  LINK (1 minute)
$parameters = array(
    'chat_id' => $CHANNEL_ID,
    'expire_date' => time() + 60,
);
$response = send($BOT_TOKEN, $parameters, 'exportChatInviteLink');



echo $response;
