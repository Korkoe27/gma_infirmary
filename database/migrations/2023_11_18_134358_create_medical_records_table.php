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
            $table->string('service_number');
            $table->string('presenting_complaint')->nullable();
            $table->string('history_presenting_complaint')->nullable();
            $table->string('on_direct_questioning')->nullable();
            $table->string('past_medical_history')->nullable();
            $table->string('drug_history')->nullable();
            $table->string('family_history')->nullable();
            $table->string('social_history')->nullable();
            $table->string('on_examination')->nullable();
            $table->string('cardiovascular_system')->nullable();
            $table->string('respiratory_system')->nullable();
            $table->string('abdominal_system')->nullable();
            $table->string('central_nervous_system')->nullable();
            $table->string('musculoskeletal_system')->nullable();
            $table->string('diagnosis')->nullable();
            $table->string('treatment')->nullable();
            $table->string('referral')->nullable();
            $table->string('excuse_physical_training')->nullable();
            $table->string('excuse_duty')->nullable();
            $table->string('excuse_riffle_drill')->nullable();
            $table->string('excuse_boot')->nullable();
            $table->string('excuse_shaving')->nullable();
            $table->string('summary')->nullable();
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
