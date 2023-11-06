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
        Schema::create('personnel_data', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('service_number');
            $table->string('rank');
            $table->string('surname');
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('platoon');
            $table->string('company');
            $table->string('intake');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnel_data');
    }
};
