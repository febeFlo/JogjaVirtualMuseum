<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Userlinkadmin extends Model
{
    use HasFactory;

    // Define fillable attributes
    protected $fillable = ['user_id', 'isAdmin', 'link'];

    /**
     * Get the user that owns the UserLinkAdmin.
     */
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

}
