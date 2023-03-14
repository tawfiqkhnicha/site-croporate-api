<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Component extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'icon',
        'content',
        'page_id',
        'children'
    ];
    public function page()
    {
        return $this->belongsTo(Page::class);
    }

    public function props()
    {
        return $this->hasMany(Props::class);
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
