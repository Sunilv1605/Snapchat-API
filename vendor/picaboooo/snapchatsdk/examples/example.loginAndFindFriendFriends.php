<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $snapchat->login("username", "password");

    // Find friends by Numbers and Names
    $findFriends = $snapchat->findFriends("NZ", array(
        "0000000000" => "Friend Name",
        "1234567890" => "Second Friend",
        "0987654321" => "Friend Three",
    ));

    $results = $findFriends->getResults();

    foreach ($results as $result) {
        echo sprintf("Found Friend: Username=%s Display=%s", $result->getName(), $result->getDisplay()) . "\n";
    }
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}