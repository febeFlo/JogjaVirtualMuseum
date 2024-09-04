<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuesioner1 extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'lokasi1',
        'lokasi2',
        'lokasi3',
        'lokasi4',
        'lokasi5'
    ];
}
