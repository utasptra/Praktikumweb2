<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('dokter', function (Blueprint $table) {
            $table->string('kode')->before('nama');  // 
        });
    }
    
    public function down()
    {
        Schema::table('dokter', function (Blueprint $table) {
            $table->dropColumn('kode');
        });
    }
    
};
