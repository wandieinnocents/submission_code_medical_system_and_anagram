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
        Schema::create('lab_results', function (Blueprint $table) {
            $table->id();
			$table->string('hiv', 100);
			$table->string('urinalysis', 255);
			$table->string('blood_tests', 255);
			$table->string('sputum_tests', 255);
			$table->string('fecel_tests', 255);
            $table->integer('medical_practitioner_id')->unsigned();
            $table->integer('patient_id')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_results');
    }
};
