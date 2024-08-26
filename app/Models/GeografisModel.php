<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeografisModel extends Model
{
    use HasFactory;

    protected $table = 'geografis';
    protected $fillable = [
        'keterangan',
        'nama',
        'jumlah',
    ];
}
