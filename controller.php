<?php

if (!isset($_POST['g-recaptcha-response'])) {
    exit;
}

$captcha = $_POST['g-recaptcha-response'];
$secretKey = "6LcF8CkiAAAAAD1zMHQ4PQ1EK0Za22ktEHr7bgBx";
$ip = $_SERVER['REMOTE_ADDR'];

// Request
$url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha) . '&remoteip=' . $ip;
$response = file_get_contents($url);
$responseKeys = json_decode($response,true);

// Test
if (!$responseKeys['success']) {
    var_dump("boot");
    exit;
}

var_dump("human");
