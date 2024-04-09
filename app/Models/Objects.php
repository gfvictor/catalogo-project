<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objects extends Model
{
    use HasFactory;
    protected $fillable = [
        'object_name',
        'object_tag',
        'quantity',
        'container_name',
        'container_type',
        'container_room',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
