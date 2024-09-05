<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Map extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function comment(): HasMany {
        return $this->hasMany(Comment::class, 'map_id', 'id');
    }

    public function kuesioner34(): HasMany {
        return $this->hasMany(Kuesioner34::class, 'map_id', 'id');
    }
}
