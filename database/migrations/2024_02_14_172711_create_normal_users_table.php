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
        Schema::create('normal_users', function (Blueprint $table) {
            $table->id();
            $table->string('normalUser',100);
            $table->string('email',100);
            $table->string('userImage',300);
            $table->string('active')->default('1');
            $table->longText('comment');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normal_users');
    }
};
