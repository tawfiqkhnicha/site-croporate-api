<?php

namespace App\Helpers\FileSystem;

use App\Exceptions\MenapsException;

class FileSystem
{

    private static $instance = null;

    public static function getInstance()
    {

        if (self::$instance == null) {
            self::$instance = new FileSystem();
        }

        return self::$instance;
    }

    public function editFile($file, $content)
    {

        if (!is_file($file)) {
            throw new MenapsException("File not found");
        }

        $contents = file_get_contents($file);

        //Decode the JSON data into a PHP array.
        $contentsDecoded = json_decode($contents, true);

        $contentsDecoded['test'] = $content;

        $json = json_encode($contentsDecoded);

        file_put_contents($file,  $json);

        return file_get_contents($file);
    }


    public function getContent($file)
    {

        if (!is_file($file)) {
            throw new MenapsException("File not found");
        }

        return file_get_contents($file);
    }

    public function addToFile($file, $content){


        if (!is_file($file)) {
            throw new MenapsException("File not found");
        }

        $contents = file_get_contents($file);

        //Decode the JSON data into a PHP array.
        $contentsDecoded = json_decode($contents, true);

        array_push($contentsDecoded, $content);

        $json = json_encode($contentsDecoded);

        file_put_contents($file,  $json);

        return file_get_contents($file);

}
}