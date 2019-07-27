<?php


namespace Snapchat\Util;

class FileUtil {

    public static function deleteDirectory($directory){

        if(is_dir($directory) === true){

            $files = array_diff(scandir($directory), array(".", ".."));

            foreach($files as $file){
                self::deleteDirectory(realpath($directory) . '/' . $file);
            }

            return rmdir($directory);

        }

        else if(is_file($directory) === true){
            return unlink($directory);
        }

        return false;

    }

}