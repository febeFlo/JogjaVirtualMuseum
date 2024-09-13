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
        Schema::create('kuesioner1s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lokasi1');
            $table->foreign('lokasi1')->on('maps')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('lokasi2');
            $table->foreign('lokasi2')->on('maps')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('lokasi3');
            $table->foreign('lokasi3')->on('maps')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('lokasi4');
            $table->foreign('lokasi4')->on('maps')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('lokasi5');
            $table->foreign('lokasi5')->on('maps')->references('id')->onUpdate('cascade');
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->on('users')->references('id')->onUpdate('cascade');
            $table->string('titik_tambahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuesioner1s');
    }
};
