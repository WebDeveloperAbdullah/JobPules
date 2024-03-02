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
        Schema::create('job_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('designation',200);
            $table->string('companyName',200);
            $table->string('joiningDate',200);
            $table->string('departureDate',200);
            $table->string('skile',300);
            $table->string('currentSalary',50);
            $table->string('expectedSalary',300);
            $table->unsignedBigInteger('candidate_id')->unique();
            $table->foreign('candidate_id')->references('id')->on('candidate_profiles')->restrictOnDelete()->cascadeOnUpdate();

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_experiences');
    }
};
