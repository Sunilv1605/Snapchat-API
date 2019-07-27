<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $login = $snapchat->login("username", "password");

    // Upload Photo to Snapchat
    $uploadPayload = $snapchat->uploadPhoto("photo.jpg");

    // Send Snap
    $snapchat->sendMedia($uploadPayload, 10, ["recipient"]);

    // Send Snap (and set as Story)
    //$snapchat->sendMedia($uploadPayload, 10, ["recipient"], true);

    // Set Story only
    //$snapchat->sendMedia($uploadPayload, 10, [], true);
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}