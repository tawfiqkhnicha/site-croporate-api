<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;


class Language extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $connection = 'mongodb';
    protected $collection = 'languages';
    protected $guarded = 'languages';

    protected $fillable = [

        
        'label',
        'title',
        'icon',
        
    ];

    public function translations()
    {
        return $this->hasMany(Translation::class);
    }
}
