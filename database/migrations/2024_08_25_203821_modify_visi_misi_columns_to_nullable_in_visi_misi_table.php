<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyVisiMisiColumnsToNullableInVisiMisiTable extends Migration
{
    public function up(): void
    {
        Schema::table('visi_misi', function (Blueprint $table) {
            $table->string('visi')->nullable()->change();
            $table->string('misi')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('visi_misi', function (Blueprint $table) {
            $table->string('visi')->nullable(false)->change();
            $table->string('misi')->nullable(false)->change();
        });
    }
};
