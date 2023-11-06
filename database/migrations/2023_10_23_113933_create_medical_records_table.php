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
            $table->string('presenting_complaint');
            $table->string('history_presenting_complaint');
            $table->string('on_direct_questioning');
            $table->string('past_medical_history');
            $table->string('drug_history');
            $table->string('family_history');
            $table->string('social_history');
            $table->string('on_examination');
            $table->string('cardiovascular_system');
            $table->string('respiratory_system');
            $table->string('abdominal_system');
            $table->string('central_nervous_system');
            $table->string('musculoskeletal_system');
            $table->string('diagnosis');
            $table->string('treatment');
            $table->string('referral');
            $table->string('excuse_physical_training');
            $table->string('excuse_duty');
            $table->string('excuse_riffle_drill');
            $table->string('excuse_boot');
            $table->string('excuse_shaving');
            $table->string('summary');
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
