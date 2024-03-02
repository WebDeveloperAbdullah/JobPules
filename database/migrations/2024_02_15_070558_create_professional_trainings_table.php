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
        Schema::create('professional_trainings', function (Blueprint $table) {
            $table->id();
            $table->string('traininrName',200);
            $table->string('institutaionName',200);
            $table->string('completionYear',200);

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
        Schema::dropIfExists('professional_trainings');
    }
};
