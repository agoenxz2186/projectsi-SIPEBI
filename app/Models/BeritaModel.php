<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class BeritaModel extends Model
{
    use HasFactory;
     // Relasi One-to-Many (Setiap berita dimiliki oleh satu pengguna)
     public function user()
     {
         return $this->belongsTo(user::class, 'id_users');
     }
     protected $table = 'berita';
     protected $fillable = [
         'judul',
         'isi',
         'foto',
         'id_users',
     ];
     protected static function boot()
{
    parent::boot();

    static::creating(function ($berita) {
        $berita->id_users = auth()->id();
    });
}
}
