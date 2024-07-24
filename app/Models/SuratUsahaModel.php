<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class SuratUsahaModel extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    protected $table = 'surat_usaha';
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt',
        'rw',
        'pekerjaan',
        'nik',
        'kewarganegaraan',
        'agama',
        'status_perkawinan',
        'mulai_usaha',
        'jenis_usaha',
        'status_usaha',
        'ukuran',
        'alamat_usaha',
        'alasan',
        'id_users',
    ];
    protected static function boot()
{
   parent::boot();

   static::creating(function ($suratusaha) {
       $suratusaha->id_users = auth()->id();
   });
}
}