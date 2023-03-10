<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public function languages()
    {
        return $this->belongsToMany(Language::class, null, "content_id", "language_id")->withPivot('translation');
    }

}
