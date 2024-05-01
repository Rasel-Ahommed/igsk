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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('first_name'); // First name of the employee
            $table->string('last_name'); // Last name of the employee
            $table->string('email')->unique(); // Unique email address
            $table->string('phone')->nullable(); // Phone number
            $table->string('position')->nullable(); // Position in the company
            $table->string('department')->nullable(); 
            $table->string('image')->nullable();
            $table->integer('experience')->nullable();
            $table->string('education')->nullable();
            $table->string('school_type')->nullable();
            $table->string('team')->nullable();
            
            // Department in the company
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
