<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Translation extends Model
{
    use HasFactory;

    public function content()
    {
        return $this->belongsTo(Content::class);
    }
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}