<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Use a Proxy for API Requests
    $snapchat->setProxy("127.0.0.1:8888"); //Proxy for Snapchat API

    // Use AuthToken instead of Username and Password
    $snapchat->initWithAuthToken("username", "auth_token");

    // Download a Snap by ID. You will need to know the File Extension
    $mediapath = $snapchat->downloadSnapById("1234567890123456r", "download/snaps/SavedSnap.jpg");

    // Download a Story by ID. You will need to know the Key/IV and File Extension
    $mediapath = $snapchat->downloadStoryById("1234567890123456r", "key", "iv", "download/stories/SavedStory.jpg");

    // Mark a Snap Viewed by Id (or Snap Object)
    $snapchat->markSnapViewed("1234567890123456r");

    // Mark a Story Viewed by Media Id (or Story Object)
    $snapchat->markStoryViewed("xxxxxxxxxxxxxxxx");

    // Snaps and Chat Messages
    $conversations = $snapchat->getConversations();

    // Friends, Friend Requests
    $friendsResponse = $snapchat->getCachedFriendsResponse();

    // AuthToken, Score, Birthday, etc
    $updatesResponse = $snapchat->getAllUpdates();

    // Your Stories and Friends Stories
    $storiesResponse = $snapchat->getStories();
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}