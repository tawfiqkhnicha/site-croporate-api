<?php

namespace  App\Managers\TranslationManager;

use App\Managers\Manager\BaseManager;
use App\Helpers\FileSystem\FileSystem;
use Illuminate\Support\Facades\App;

class TranslationManager extends BaseManager{

    private $file_path;
    private $fs;

    public function __construct()
    {
        $this->file_path = App::langPath().'/common/translation.json';
        $this->fs = FileSystem::getInstance();
    }
   

    public function getAllTranslation(){

        $content = $this->fs->getContent($this->file_path);
      
       return $content;
    }

    public function addTranslation($content){

        return $this->fs->addToFile($this->file_path, $content);
    }

}