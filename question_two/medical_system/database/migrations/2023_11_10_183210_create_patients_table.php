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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->date('date_of_birth');
			$table->string('gender', 255);
			$table->string('occupation', 255);
			$table->string('nationality', 255);
			$table->string('address', 255);
			$table->string('next_of_kin_name', 255);
			$table->string('next_kin_contact', 255);
			$table->string('patient_contact', 255);
			$table->string('email', 255);
			$table->string('hereditary_diseases_available');
			$table->string('created_by');
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
