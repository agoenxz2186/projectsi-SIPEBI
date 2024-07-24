<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

        public function up()
        {
            Schema::create('surat_usaha', function (Blueprint $table) {
                $table->id();
                $table->string('nama');
                $table->string('tempat_lahir');
                $table->date('tanggal_lahir');
                $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
                $table->string('alamat');
                $table->string('rt', 3)->nullable();
                $table->string('rw', 3)->nullable();
                $table->string('pekerjaan');
                $table->string('nik', 16);
                $table->string('kewarganegaraan');
                $table->enum('agama', ['Islam', 'Khatolik', 'Protestan', 'Hindu', 'Buddha', 'Konghucu']);
                $table->enum('status_perkawinan', ['Belum Menikah', 'Menikah', 'Cerai Hidup', 'Cerai Mati']);
                $table->enum('jenis_usaha', ['Perdagangan', 'Jasa', 'Kuliner', 'Industri Kreatif', 'Pertanian dan Perikanan','Manufaktur dan Produksi','Kesehatan','Transportasi dan Logistik','Teknologi Informasi','Pendidikan']);
                $table->date('mulai_usaha');
                $table->enum('status_usaha', ['Milik Sendiri', 'Sewa', 'Kontrak']);
                $table->float('ukuran');
                $table->string('alamat_usaha');
                $table->string('alasan');
                $table->unsignedBigInteger('id_users');
                $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
            });
        }
    
        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::dropIfExists('surat_usaha');
        }
};