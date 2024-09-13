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
        Schema::create('userlinkadmins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->index()->unique();
            $table->foreign('user_id')->on('users')->references('id')->onUpdate('cascade');
            $table->boolean('isAdmin')->default(FALSE);
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('userlinkadmins');
    }
};
