<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    public function contents()
    {
        return $this->belongsToMany(Content::class,  "content_id", "language_id")->withPivot('translation');
    }
}
