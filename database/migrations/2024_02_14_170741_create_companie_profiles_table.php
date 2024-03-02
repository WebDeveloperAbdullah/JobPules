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
        Schema::create('companie_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('companieName',100);
            $table->string('companieImage',100);
            $table->string('companieAdders',100);
            $table->string('companiePhone',100);
            $table->string('companieCity',100);
            $table->string('companiePostcode',100);
            $table->string('companieCountry',100);
            $table->string('companieFax',100);
            $table->string('companieShipName',100);
            $table->string('companieShipAdd',100);
            $table->string('companieShipCity',100);
            $table->string('companieShipCountry',100);
            $table->string('companieShipPhone',100);
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
        Schema::dropIfExists('companie_profiles');
    }
};
