<?php

namespace Snapchat\Crypto;

use Snapchat\Exceptions\SnapchatException;

class StoryCrypto
{
    /**
     * Decrypts blob data for stories.
     *
     * @param $data object The data to decrypt.
     * @param $key string The base64-encoded Key.
     * @param $iv string The base64-encoded IV.
     * @return object The decrypted data.
     * @throws SnapchatException
     */
    public static function decryptStory($data, $key, $iv)
    {
        $key = base64_decode($key);
        $iv = base64_decode($iv);

        $data = openssl_decrypt($data, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
        $error = openssl_error_string();

        if ($error !== false) {
            throw new SnapchatException("OpenSSL decryption error: " . $error);
        }

        $padding = ord($data[strlen($data) - 1]);

        return substr($data, 0, -$padding);
    }
}