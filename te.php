<?php
include("Telegram.php");
$telegram = new Telegram($bot_id);


$chat_id = $telegram->ChatID();
$content = array('@ATaaheri' => $chat_id, 'text' => "Test");
$telegram->sendMessage($content);