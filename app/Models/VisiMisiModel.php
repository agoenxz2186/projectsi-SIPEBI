<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisiModel extends Model
{
    use HasFactory;

    protected $table = 'visi_misi';
    protected $fillable = ['visi', 'misi'];
}
