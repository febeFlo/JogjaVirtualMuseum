<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    // Define the inverse relationship for lokasi1
    public function kuesioner1FromLokasi1(): BelongsTo {
        return $this->belongsTo(Kuesioner1::class, 'lokasi1', 'id');
    }

    // Define the inverse relationship for lokasi2
    public function kuesioner1FromLokasi2(): BelongsTo {
        return $this->belongsTo(Kuesioner1::class, 'lokasi2', 'id');
    }

    // Define the inverse relationship for lokasi3
    public function kuesioner1FromLokasi3(): BelongsTo {
        return $this->belongsTo(Kuesioner1::class, 'lokasi3', 'id');
    }

    // Define the inverse relationship for lokasi4
    public function kuesioner1FromLokasi4(): BelongsTo {
        return $this->belongsTo(Kuesioner1::class, 'lokasi4', 'id');
    }

    // Define the inverse relationship for lokasi5
    public function kuesioner1FromLokasi5(): BelongsTo {
        return $this->belongsTo(Kuesioner1::class, 'lokasi5', 'id');
    }
}
