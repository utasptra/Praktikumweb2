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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama',45);
            $table->enum('gender',['male','female']);
            $table->string('tmp_lahir',30);
            $table->date('tgl_lahir');
            $table->enum('kategori',['Umum','Spesialis','Bidan','Dokter gigi','Anastesi']);
            $table->string('telepon',20);
            $table->string('alamat',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dokters');
    }
};
