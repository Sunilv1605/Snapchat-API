<?php

use Snapchat\API\Response\LoginResponse;
use Snapchat\SnapchatClient;

$username = '';
$password = '';

$snapchat = new SnapchatClient();

try {
    $preAuthToken = null;
    $odlvPreAuthToken = null;
    $otpType = null;

    while (true) {
        // Login to Snapchat.
        $login = $snapchat->login($username, $password, $preAuthToken, $odlvPreAuthToken, $otpType);

        // Require 2FA with SMS / App (2FA enabled).
        if ($login->isTwoFaNeeded()) {
            throw new Exception("2FA needed.");
        }

        // Require 2FA with Email / Phone (Suspicious login).
        if ($login->isOdlvRequired()) {

            // Select a verification method, should be EMAIL_TOTP or PHONE_TOTP.
            $otpType = requestMethod($login);

            // Tell Snapchat to send a token.
            $snapchat->requestOneTimePassword($username, $login->getOdlvPreAuthToken(), $otpType);

            // Update variables for 2FA authentication.
            $password = requestPassword();
            $odlvPreAuthToken = $login->getOdlvPreAuthToken();

            continue;
        }

        break;
    }

    echo 'Successfully signed in.' . PHP_EOL;

    // The $snapchat instance is now fully authenticated.

    // Make sure to cache
    // - $snapchat->getDeviceTokenIdentifier()
    // - $snapchat->getDeviceTokenVerifier()
    // And set it back with
    // - $snapchat->initDeviceToken($deviceTokenIdentifier, $deviceTokenVerifier)
    // In a real application so you do not have to re-do 2FA.
} catch (Exception $e) {
    // Something went wrong...
    echo $e->getMessage() . "\n";
}

/**
 * @param LoginResponse $response
 * @return string
 */
function requestMethod($response) {
    echo 'You have to do 2FA for this account.' . PHP_EOL;
    echo 'Please choose an option below:' . PHP_EOL;

    if (!empty($response->getObfuscatedEmail())) {
        echo ' [1] Email ' . $response->getObfuscatedEmail() . PHP_EOL;
    }

    if (!empty($response->getObfuscatedPhone())) {
        echo ' [2] Phone ' . $response->getObfuscatedPhone() . PHP_EOL;
    }

    $valid = false;

    do {
        echo "Enter a valid number: ";

        $index = intval(trim(fgets(STDIN)));
        if ($index == 1 || $index == 2) break;
    } while(!$valid);

    if ($index == 1) {
        return 'EMAIL_TOTP';
    } else {
        return 'PHONE_TOTP';
    }
}

function requestPassword() {
    echo 'Enter the 2FA token: ' . PHP_EOL;
    return trim(fgets(STDIN));
}