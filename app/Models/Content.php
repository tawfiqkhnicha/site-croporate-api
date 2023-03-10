<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }

}
