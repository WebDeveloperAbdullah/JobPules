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
        Schema::create('candidate_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('fullName',100);
            $table->string('profileImage',300);
            $table->string('fatherName',100);
            $table->string('motherName',100);
            $table->string('dateOfBirth',100);
            $table->string('bloodGroup',100);
            $table->string('nid',100);
            $table->string('passportNo',100);
            $table->string('phone',100);
            $table->string('emergecyContactNo',100);
            $table->string('email',100);
            $table->string('whatsApp',100);
            $table->string('linkedin',100);
            $table->string('facebook',100);
            $table->string('github',100);
            $table->string('behanceDribble',100);
            $table->string('skills',255);
            $table->string('currentSalary',255);
            $table->string('expectedSalary',255);
            $table->unsignedBigInteger('user_id')->unique();
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
        Schema::dropIfExists('candidate_profiles');
    }
};
