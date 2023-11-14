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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Laravel Developer');
            $table->date('dob')->default('2000-07-25');
            $table->string('website')->default('masolution.net');
            $table->string('phone')->default('masolution.net');
            $table->string('city')->default('Doula,Bonaberi');
            $table->string('email')->default('anaguesonnaroosvelt@gmail.com');
            $table->string('degree')->default('bachelor');
            $table->string('age')->default('23');
            $table->string('profession')->default('freelancer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
