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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('likes')->nullable();
            $table->boolean('is_published')->default(1);
            $table->timestamps();

            $table->unsignedBigInteger('category_id')->nullable();

            $table->index('category_id', 'post_category_idx');

            $table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.php
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
