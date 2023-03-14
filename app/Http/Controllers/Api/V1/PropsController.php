<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\BaseApi;
use App\Managers\PropsManager\PropsManager;
use Illuminate\Http\Request;

class PropsController extends  BaseApi
{
   public function __construct(protected  PropsManager $propsManager)
   {
   }
   public function defaultManager()
   {
      return $this->propsManager;
   }
}