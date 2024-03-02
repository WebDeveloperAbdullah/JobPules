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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('jobDescription');
            $table->string('jobLocation',100);
            $table->string('jobPrice',100);
            $table->string('jobTag',255);
            $table->string('active')->default('1');
            $table->unsignedBigInteger('jobCategory_id',);
            $table->foreign('jobCategory_id')->references('id')->on('job_categories')->restrictOnDelete()->cascadeOnUpdate();

            $table->unsignedBigInteger('companie_id',);
            $table->foreign('companie_id')->references('id')->on('companie_profiles')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
