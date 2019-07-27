<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $snapchat->login("username", "password");

    // Get Conversations from Login Response
    $conversations = $snapchat->getCachedConversations();

    // Mark all unviewed Snaps as Viewed
    foreach ($conversations as $conversation) {
        $snaps = $conversation->getSnaps();
        foreach ($snaps as $snap) {
            // Snaps we Received and haven't Viewed yet
            if ($snap->wasReceived() && !$snap->hasBeenViewed()) {
                $snapchat->markSnapViewed($snap);
            }
        }
    }
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}