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
        Schema::create('section_titles', function (Blueprint $table) {
            $table->id();
            $table->string('our_feature_title')->nullable();
            $table->string('our_feature_sub_title')->nullable();

            $table->string('our_categories_title')->nullable();
            $table->string('our_categories_sub_title')->nullable();

            $table->string('our_location_title')->nullable();
            $table->string('our_location_sub_title')->nullable();

            $table->string('our_featured_listing_title')->nullable();
            $table->string('our_featured_listing_sub_title')->nullable();

            $table->string('our_our_pricing_title')->nullable();
            $table->string('our_our_pricing_sub_title')->nullable();

            $table->string('our_testimonial_title')->nullable();
            $table->string('our_testimonial_sub_title')->nullable();

            $table->string('our_blog_title')->nullable();
            $table->string('our_blog_sub_title')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_titles');
    }
};
