<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $snapchat->login("username", "password");

    // Add Friend
    $snapchat->addFriend("username_to_add");

} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}