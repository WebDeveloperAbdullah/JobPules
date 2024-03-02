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
        Schema::create('job_applieds', function (Blueprint $table) {
            $table->id();
            $table->string('active')->default('1');
            $table->unsignedBigInteger('candidate_id')->unique();
            $table->unsignedBigInteger('job_id')->unique();
            $table->foreign('candidate_id')->references('id')->on('candidate_profiles')->restrictOnDelete()->cascadeOnUpdate();
            $table->foreign('job_id')->references('id')->on('jobs')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applieds');
    }
};
