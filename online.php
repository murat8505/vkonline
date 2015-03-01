<?php
$token = "";// Ваш токен | http://vk.cc/2s4UkI

$query = curl_init("https://api.vk.com/method/account.setOnline?access_token=$token");
curl_setopt($query, CURLOPT_RETURNTRANSFER, true);
curl_setopt($query, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($query, CURLOPT_SSL_VERIFYPEER, false);
curl_exec($query);
curl_close($query);
?>
