<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
