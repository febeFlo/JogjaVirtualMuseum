<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Kuesioner1 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'lokasi1',
        'lokasi2',
        'lokasi3',
        'lokasi4',
        'lokasi5',
        'user_id'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function lokasi1Map(): HasOne {
        return $this->hasOne(Map::class, 'id', 'lokasi1');
    }

    public function lokasi2Map(): HasOne {
        return $this->hasOne(Map::class, 'id', 'lokasi2');
    }

    public function lokasi3Map(): HasOne {
        return $this->hasOne(Map::class, 'id', 'lokasi3');
    }

    public function lokasi4Map(): HasOne {
        return $this->hasOne(Map::class, 'id', 'lokasi4');
    }

    public function lokasi5Map(): HasOne {
        return $this->hasOne(Map::class, 'id', 'lokasi5');
    }
}
