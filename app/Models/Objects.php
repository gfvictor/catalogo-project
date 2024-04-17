<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Laravel\Scout\Searchable;

class Objects extends Model
{
    use Searchable;
    use HasFactory;
    protected $guarded = [];
    public function user(): Relation
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function toSearchableArray(): array
    {
        return [
            'object_name' => $this->object_name,
            'object_tag' => $this->object_tag,
            'container_type' => $this->container_type,
            'container_room' => $this->container_room,
            'user_id' => $this->user_id
        ];
    }
}
