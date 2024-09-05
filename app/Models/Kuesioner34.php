<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kuesioner34 extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'lokasi_menyenangkan',
        'lokasi_ribut',
        'lokasi_bersemangat',
        'lokasi_sepi',
        'lokasi_tenang',
        'lokasi_mengganggu',
        'lokasi_ramai',
        'lokasi_membosankan',
        'narasi',
        'map_id'
    ];

    public function map(): BelongsTo {
        return $this->belongsTo(Map::class, 'map_id', 'id');
    }
}
