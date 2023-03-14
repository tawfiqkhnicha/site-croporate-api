<?php

namespace App\Http\Controllers\Api\V1;
use App\Managers\ComponentManager\ComponentManager;

use App\Http\Controllers\BaseApi;
use Illuminate\Http\Request;

class ComponentController extends  BaseApi
{
   public function __construct(protected  ComponentManager $componentManager)
   {
   }
   public function defaultManager()
   {
      return $this->componentManager;
   }
}
