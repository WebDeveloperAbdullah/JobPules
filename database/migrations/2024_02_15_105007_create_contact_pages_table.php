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
        Schema::create('contact_pages', function (Blueprint $table) {
            $table->id();
            $table->string('pageTitle',200);
            $table->string('location',200);
            $table->string('email',100);
            $table->string('phone',15);
            $table->string('banarImage1',300);
            $table->string('banarImage2',300);
            $table->string('banarImage3',300);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_pages');
    }
};
