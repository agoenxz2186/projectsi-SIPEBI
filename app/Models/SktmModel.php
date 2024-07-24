<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;



class SktmModel extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
    protected $table = 'sktm';
    protected $fillable = [
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'rt', 
        'rw',
        'pekerjaan',
        'kewarganegaraan',
        'agama',
        'status_perkawinan',
        'nik',
        'nomor_kk',
        'alasan',
        'id_users',
    ];
    protected static function boot()
{
   parent::boot();

   static::creating(function ($sktm) {
       $sktm->id_users = auth()->id();
   });
}
}
