<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\BaseApi;
use Illuminate\Http\Request;
use App\Managers\PageManager\PageManager;
class PageController extends BaseApi//classe mere dyel ga3les fonctions
{ 
   function __construct(protected  PageManager $pageManager) { 
    }
   public function defaultManager()//singleton instance ml manager
   {
    return $this->pageManager ;
   }
}
// no more code here