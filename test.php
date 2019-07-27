<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . './vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $snapchat->login("sunil.techwob", "admin@123");

    // Add Friend
    $snapchat->addFriend("pravinustad19");

} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}