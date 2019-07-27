<?php

use Snapchat\API\Response\Model\VerificationNeeded;
use Snapchat\SnapchatClient;
use Snapchat\Util\FileUtil;

require_once __DIR__ . '/../vendor/autoload.php';

$snapchat = new SnapchatClient();

try {
    register_account: {

        echo "First name: ";
        $firstName = trim(fgets(STDIN));

        echo "Last name: ";
        $lastName = trim(fgets(STDIN));

        echo "Username: ";
        $username = trim(fgets(STDIN));

        echo "Password: ";
        $password = trim(fgets(STDIN));

        echo "Birthday (YYYY-MM-DD): ";
        $birthday = trim(fgets(STDIN));

        echo "Registering Account...\n";

        try {
            $response = $snapchat->register($username, $password, $firstName, $lastName, $birthday, "America/New_York");

            echo "Account Registered.!\n";

            if ($response->getVerificationNeeded() != null) {
                if ($response->getVerificationNeeded()->getType() == VerificationNeeded::TYPE_CAPTCHA) {
                    echo "Captcha message: " . $response->getVerificationNeeded()->getPrompt();
                    goto solve_captcha;
                } else {
                    echo "Unknown verification was requested: " . $response->getVerificationNeeded()->getType();
                }
            } else {
                goto done;
            }
        } catch (Exception $e) {
            echo $e->getMessage() . "\n";
            goto register_account;
        }
    }

    solve_captcha: {
        echo "Downloading Captcha...\n";

        $captcha = $snapchat->getCaptcha("download/captcha");

        echo "The Captcha solution is a string of 1's and 0's.\n";
        echo sprintf("View the Images in the folder:  %s\n", $captcha->getFolder());
        echo "If the Image has a ghost (or number), enter a 1 else enter a 0.\n";
        echo "Folder will be deleted afterwards.\n";

        echo "Solution: ";
        $solution = trim(fgets(STDIN));

        try {
            $snapchat->solveCaptcha($captcha->getId(), $solution);
        } finally {
            FileUtil::deleteDirectory($captcha->getFolder());
        }

        goto done;
    }

    done: {
        echo "Account Verified, all done!\n";
    }
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}