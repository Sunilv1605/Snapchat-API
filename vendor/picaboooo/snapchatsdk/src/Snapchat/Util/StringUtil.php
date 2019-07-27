<?php


namespace Snapchat\Util;

class StringUtil {

    public static function startsWith($source, $query){
        return 0 === strpos($source, $query);
    }

}