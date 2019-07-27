<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $snapchat->login("username", "password");

    // Download My SnapTag
    $snapchat->downloadMySnapTag(sprintf("download/snaptag/%s.png", $snapchat->getUsername()));

    // Download someone else's SnapTag
    $snapchat->downloadSnapTagByUsername("teamsnapchat", "download/snaptag/teamsnapchat.png");
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}