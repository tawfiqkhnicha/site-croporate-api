<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Props extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'component_id',
    ];
    public function component()
    {
        return $this->belongsTo(Component::class);
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
