<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $snapchat->login("username", "password");

    // Get Stories from Login Response
    $storiesResponse = $snapchat->getCachedStoriesResponse();

    // Iterate Friend Stories
    foreach ($storiesResponse->getFriendStories() as $friendStories) {

        // We only want Stories for this Username
        if ($friendStories->getUsername() == "username_you_want_stories_from") {

            $storiesContainer = $friendStories->getStories();
            foreach ($storiesContainer as $storyContainer) {

                $story = $storyContainer->getStory();

                echo "Downloading Story: " . $story->getId() . "\n";

                // Where to Save the Files
                $filename = sprintf("download/stories/%s.%s", $story->getId(), $story->getFileExtension());
                $filename_overlay = sprintf("download/stories/%s_overlay", $story->getId());

                // Download the Story
                $mediapath = $snapchat->downloadStory($story, $filename, $filename_overlay);

                echo "Story saved to: " . $mediapath->getBlobPath() . "\n";
                if ($mediapath->overlayExists()) {
                    echo "Story Overlay saved to: " . $mediapath->getOverlayPath() . "\n";
                }

            }

            break;

        }

    }
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}