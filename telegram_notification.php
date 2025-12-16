<?php
$botToken = "8098107273:AAHyMGw-8u0rfslh73yiW6JagwRxTVR32Z4";
$chatId   = "6305618679";

function sendTelegramNotification($message) {
    global $botToken, $chatId;

    $text = urlencode($message);
    $url  = "https://api.telegram.org/bot{$botToken}/sendMessage?chat_id={$chatId}&text={$text}&parse_mode=HTML";

    $response = @file_get_contents($url);
    return $response !== false;
}
?>
