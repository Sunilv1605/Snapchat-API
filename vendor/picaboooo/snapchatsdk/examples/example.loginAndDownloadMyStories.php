<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $snapchat->login("username", "password");

    // Get Stories from Login Response
    $storiesResponse = $snapchat->getCachedStoriesResponse();

    // Iterate My Stories
    foreach ($storiesResponse->getMyStories() as $myStory) {

        // he Story object
        $story = $myStory->getStory();

        // Details about who viewed your Story
        $storyNotes = $myStory->getStoryNotes();

        // View and Screenshot counts
        $storyExtras = $myStory->getStoryExtras();

        foreach ($storyNotes as $storyNote) {
            // When the Story was viewed
            $timestamp = $storyNote->getTimestamp();

            // Username that viewed the story
            $viewer = $storyNote->getViewer();

            // Did the user screenshot your story?
            $screenshot = $storyNote->isScreenshotted();

            // Do something with the above info
        }

        // How many times the story has been screenshot
        $screenshotCount = $storyExtras->getScreenshotCount();

        // How many times the story has been viewed.
        $viewCount = $storyExtras->getViewCount();

        // Where to Save the Story
        $filename = sprintf("download/stories/%s.%s", $story->getId(), $story->getFileExtension());

        // Download the Story
        $mediapath = $snapchat->downloadStory($story, $filename);
    }
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}