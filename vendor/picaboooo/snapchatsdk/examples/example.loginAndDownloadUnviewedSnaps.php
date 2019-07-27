<?php

use Snapchat\SnapchatClient;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    // Login
    $snapchat->login("username", "password");

    // Get Conversations from Login Response
    $conversations = $snapchat->getCachedConversations();

    // Download all un-viewed Snaps
    foreach ($conversations as $conversation) {
        $snaps = $conversation->getSnaps();
        foreach ($snaps as $snap) {
            // Only Received Snaps that haven't been Viewed
            if ($snap->wasReceived() && !$snap->hasBeenViewed()) {
                // Where to Save the Snap
                $filename = sprintf("download/snaps/%s.%s", $snap->getId(), $snap->getFileExtension());

                // Where to Save the Overlay (if it exists)
                $filename_overlay = sprintf("download/snaps/%s_overlay.png", $snap->getId());

                // Download the Snap
                $mediapath = $snapchat->downloadSnap($snap, $filename, $filename_overlay);

                echo "Snap saved to: " . $mediapath->getBlobPath() . "\n";

                if ($mediapath->overlayExists()) {
                    echo "Snap Overlay saved to: " . $mediapath->getOverlayPath() . "\n";
                }
            }
        }
    }
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}