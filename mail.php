 <?php
$botToken = "415769805:AAF_B_UClO0zgP1TAZ4_s4Ra6kRD-_3ELKo";
$chat_id = "-221520487";
$message = "heeeeey";
$bot_url    = "https://api.telegram.org/bot$botToken/";
$url = $bot_url."sendMessage?chat_id=".$chat_id."&text=".urlencode($message);
file_get_contents($url);
?>
