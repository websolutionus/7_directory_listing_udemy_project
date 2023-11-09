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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();
            $table->string('background')->nullable();
            $table->integer('counter_one')->nullable();
            $table->string('counter_one_title')->nullable();
            $table->integer('counter_two')->nullable();
            $table->string('counter_two_title')->nullable();
            $table->integer('counter_three')->nullable();
            $table->string('counter_three_title')->nullable();
            $table->integer('counter_four')->nullable();
            $table->string('counter_four_title')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
