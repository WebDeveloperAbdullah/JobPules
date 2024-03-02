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
        Schema::create('education_information', function (Blueprint $table) {
            $table->id();
            $table->string('ssc',50);
            $table->string('hsc',50);
            $table->string('graduation',50);
            $table->string('schoolName',255);
            $table->string('collegeName',255);
            $table->string('univeristyName',255);
            $table->string('sscPassingYear',255);
            $table->string('hscPassingYear',255);
            $table->string('graduationPassingYear',255);
            $table->string('sscGPA_marks',255);
            $table->string('hscGPA_marks',255);
            $table->string('graduGPA',255);

            $table->unsignedBigInteger('candidate_id',);
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
        Schema::dropIfExists('education_information');
    }
};
