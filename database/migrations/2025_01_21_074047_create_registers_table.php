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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('number', 20)->nullable();
            $table->string('desigination')->nullable(); // typo: consider fixing to 'designation' for consistency
            $table->string('organization')->nullable();
            $table->string('province')->nullable();
            $table->string('participation')->nullable();
            $table->string('dietary_restriction')->nullable();
            $table->string('accommodation')->nullable();
            $table->decimal('academic_score', 5, 2)->nullable(); // retained if still needed
            $table->string('membership')->nullable();
            $table->string('member_num')->nullable();
            $table->string('lifeMember_num')->nullable();
            $table->string('generalMember_num')->nullable();
            $table->text('remarks')->nullable();
            $table->string('image')->nullable(); // store filename or path
            $table->string('hear')->nullable(); // how did you hear about event
            $table->timestamps();

            // Optional: index for frequent lookups
            $table->index(['email', 'number', 'organization']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
