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
        Schema::create('kuesioner34s', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi_menyenangkan');
            $table->string('lokasi_ribut');
            $table->string('lokasi_bersemangat');
            $table->string('lokasi_sepi');
            $table->string('lokasi_tenang');
            $table->string('lokasi_mengganggu');
            $table->string('lokasi_ramai');
            $table->string('lokasi_membosankan');
            $table->text('narasi');
            $table->unsignedBigInteger('map_id')->index();
            $table->foreign('map_id')->on('maps')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->on('users')->references('id')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuesioner34s');
    }
};
