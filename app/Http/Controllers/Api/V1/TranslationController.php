<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\BaseApi;
use App\Managers\TranslationManager\TranslationManager;
use Illuminate\Http\Request;

class TranslationController extends  BaseApi
{

   function __construct(protected TranslationManager $translationManager)
   {
   }


   public function defaultManager()
   {
      return $this->translationManager;
   }

   public function getAll()
   {

      return $this->defaultManager()->getAllTranslation();
   }

   public function addTranslation(Request $request)
   {

      $content = json_decode($request->getContent(), true);

      return $this->defaultManager()->addTranslation($content);
   }
}
