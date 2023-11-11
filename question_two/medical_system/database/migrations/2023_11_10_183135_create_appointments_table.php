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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('medical_practitioner_id')->unsigned();
            $table->integer('patient_id')->unsigned();
			$table->date('appointment_date');
			$table->text('reason_of_appointment');
			$table->text('detailed_description_of_issue');
			$table->text('clinical_notes');
			$table->string('appointment_time');
			$table->enum('appointment_status', array('pending', 'complete', 'cancelled'));
			$table->string('created_by');

			$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
