<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('geografis', function (Blueprint $table) {
            $table->string('nama')->nullable()->change();
            $table->string('jumlah')->nullable()->change();
            $table->string('keterangan')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('geografis', function (Blueprint $table) {
            $table->string('nama')->change();
            $table->string('jumlah')->change();
            $table->string('keterangan')->change();
        });
    }
};
