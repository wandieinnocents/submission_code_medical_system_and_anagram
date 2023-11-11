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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id')->unsigned();
            $table->integer('lab_test_results_id')->unsigned();
            $table->integer('medical_practitioner_id')->unsigned();
			$table->string('symptoms', 255);
			$table->string('medical_condition_diagnosed', 255);
			$table->text('treatment_given');
			$table->string('visit_outcome', 255);
			$table->enum('patient_status', array('admitted', 'transffered', 'sent_home'));
			$table->string('blood_pressure', 30);
			$table->string('temperature', 30);
			$table->string('weight', 30);
			$table->string('height', 30);
			$table->string('created_by');
			$table->string('comment_on_patient', 255);
			$table->date('date_of_record');
			$table->string('prescribed_medicine');


			$table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
