<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();

            $table->string('membership_type')->nullable();
            $table->string('applicant_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('citizenship_no')->nullable();

            $table->string('per_province')->nullable();
            $table->string('per_district')->nullable();
            $table->string('per_municipality')->nullable();
            $table->string('per_ward')->nullable();
            $table->string('per_tole')->nullable();

            $table->string('tem_province')->nullable();
            $table->string('tem_district')->nullable();
            $table->string('tem_municipality')->nullable();
            $table->string('tem_ward')->nullable();
            $table->string('tem_tole')->nullable();

            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();

            $table->string('academic_qualification')->nullable();
            $table->date('year_of_completion')->nullable();
            $table->string('institute')->nullable();
            $table->string('university')->nullable();
            $table->string('occupation')->nullable();
            $table->string('experience')->nullable();

            $table->string('recommendor_name')->nullable();
            $table->string('recommendor_membership_no')->nullable();

            $table->string('photo')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('transcript')->nullable();
            $table->string('provisional_certificate')->nullable();
            $table->string('payment_receipt')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
