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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['free', 'paid']);
            $table->string('name');
            $table->double('price');
            $table->integer('number_of_days');
            $table->integer('num_of_listing');
            $table->integer('num_of_photos');
            $table->integer('num_of_video');
            $table->integer('num_of_amenities');
            $table->integer('num_of_featured_listing');
            $table->boolean('show_at_home');
            $table->boolean('status');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
