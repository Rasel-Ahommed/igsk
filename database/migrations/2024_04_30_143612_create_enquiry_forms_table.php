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
        Schema::create('enquiry_forms', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();
            $table->string('parents_name')->nullable();
            $table->string('guardian__name')->nullable();
            $table->string('gender')->nullable();
            $table->date('date')->nullable();
            $table->string('phone')->nullable();
            $table->date('start_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiry_forms');
    }
};
