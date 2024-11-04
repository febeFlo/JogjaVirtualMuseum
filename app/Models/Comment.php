<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = [
        'comment',
        // 'user_id',
        'map_id'
    ];

    // public function user(): BelongsTo {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }

    public function map(): BelongsTo {
        return $this->belongsTo(Map::class, 'map_id', 'id');
    }
}
