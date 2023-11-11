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
        Schema::create('medical_practitioners', function (Blueprint $table) {
            $table->id();
			$table->string('first_name', 255);
			$table->string('last_name', 255);
			$table->string('contact', 255);
			$table->string('address', 255);
			$table->string('designation', 255);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_practitioners');
    }
};
