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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('location_id')->constrained('locations')->onDelete('cascade');
            $table->foreignId('package_id')->nullable();
            $table->string('image');
            $table->string('thumbnail_image');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->text('website')->nullable();
            $table->text('facebook_link')->nullable();
            $table->text('x_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->text('whatsapp_link')->nullable();
            $table->boolean('is_verified')->default(0);
            $table->boolean('is_featured')->default(0);
            $table->integer('views')->default(0);
            $table->text('google_map_embed_code')->nullable();
            $table->string('file')->nullable();
            $table->date('expire_date');
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->boolean('status');
            $table->boolean('is_approved')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
