<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    public function component(){
        return $this->hasMany(Component::class);
    }
}
