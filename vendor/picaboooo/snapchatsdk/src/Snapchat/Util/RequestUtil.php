<?php


namespace Snapchat\Util;

class RequestUtil
{
    public static function getCurrentMillis()
    {
        return round(microtime(true) * 1000);
    }

    public static function generateUUID()
    {
        $uid = md5(uniqid());
        return strtoupper(sprintf('%08s-%04s-%04x-%04x-%12s', substr($uid, 0, 8), substr($uid, 8, 4), substr($uid, 12, 4), substr($uid, 16, 4), substr($uid, 20, 12)));
    }

    public static function generateMediaID($username)
    {
        return strtoupper($username . "~" . self::generateUUID());
    }

    public static function getConversationID($username, $with)
    {
        $usernames = array($username, $with);

        // Conversation Usernames are in Alphabetical Order
        sort($usernames);

        return implode("~", $usernames);
    }
}