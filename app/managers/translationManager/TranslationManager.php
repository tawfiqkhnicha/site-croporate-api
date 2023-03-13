<?php

namespace  App\Managers\TranslationManager;

use App\Managers\Manager\BaseManager;
use FileSystem;


class TranslationManager extends BaseManager{

    const FILE = '/lang/common/translation.json';

    public function getAllTranslation(){

        $fs = FileSystem::getInstance();
        $content = $fs->getContent(self::FILE);
      
       return $content;
    }

    public function editTranslation($content){

        $fs = FileSystem::getInstance();
        return $fs->editFile(self::FILE, $content);
    }

}