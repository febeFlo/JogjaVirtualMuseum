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

    public function lokasi1Map(): BelongsTo {
        return $this->belongsTo(Map::class, 'lokasi1', 'id');
    }

    public function lokasi2Map(): BelongsTo {
        return $this->belongsTo(Map::class, 'lokasi2', 'id');
    }

    public function lokasi3Map(): BelongsTo {
        return $this->belongsTo(Map::class, 'lokasi3', 'id');
    }

    public function lokasi4Map(): BelongsTo {
        return $this->belongsTo(Map::class, 'lokasi4', 'id');
    }

    public function lokasi5Map(): BelongsTo {
        return $this->belongsTo(Map::class, 'lokasi5', 'id');
    }
}
