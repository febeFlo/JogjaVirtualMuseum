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
            $table->string('lokasi1');
            $table->string('lokasi2');
            $table->string('lokasi3');
            $table->string('lokasi4');
            $table->string('lokasi5');
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
        Schema::dropIfExists('kuesioner1s');
    }
};
