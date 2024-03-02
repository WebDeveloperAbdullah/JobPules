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
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();
            $table->string('title',300);
            $table->string('image',300);
            $table->longText('comment');
            $table->unsignedBigInteger('post_id')->unique();
            $table->foreign('post_id')->references('id')->on('blog_posts')->restrictOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('normal_user_id');
            $table->foreign('normal_user_id')->references('id')->on('normal_users')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_comments');
    }
};
