<?php

namespace App\Models;
use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'url',
        'content'
    ];

    public function component(){
        return $this->hasMany(Component::class);
    }

    protected $dates = [
        'created_at',
        'updated_at',
    ];
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
