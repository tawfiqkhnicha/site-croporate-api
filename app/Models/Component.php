<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    public function page(){
        return $this->hasOne(Page::class);
    }

    public function props(){
        return $this->hasMany(Props::class);
    }

}