<?php

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

        file_put_contents($file, $content);

        return file_get_contents($file);
    }

    
    public function getContent($file)
    {
        return file_get_contents($file);
    }
}
