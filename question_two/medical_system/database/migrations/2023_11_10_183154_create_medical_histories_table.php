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
        Schema::create('medical_histories', function (Blueprint $table) {
            $table->id();
			$table->string('created_by');
            $table->integer('patient_id')->unsigned();
			$table->string('allergies', 255);
			$table->string('past_diagnosis', 255);
			$table->string('present_diagnosis');
			$table->string('family_history', 255);
			$table->string('past_medical_history', 255);
			$table->string('surgical_history', 255);
			$table->string('problematic_medicine', 255);
			$table->date('date_of_last_medical_facility_visit');
			$table->string('scan_history', 255);
			$table->string('last_medical_facility_visited', 255);
			$table->string('immunization_history', 255);
			$table->string('history_of_illness', 255);
			$table->text('past_lab_results');
			$table->string('last_recommended_medicine', 255);


			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_histories');
    }
};
