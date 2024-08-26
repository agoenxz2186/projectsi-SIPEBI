<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturFotoModel extends Model
{
    use HasFactory;

    protected $table = 'strukturfoto';
    protected $fillable = ['struktur_foto'];
}
