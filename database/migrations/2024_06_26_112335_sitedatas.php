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
        Schema::create('sitedatas', function (Blueprint $table) {
            $table->id();
            $table->string('director_img')->nullable();
            $table->string('why_igsk_img')->nullable();
            $table->string('goal_img')->nullable();
            $table->string('student_rules_img')->nullable();
            $table->string('parents_rules_img')->nullable();
            $table->string('library_img')->nullable();
            $table->string('director_speech')->nullable();
            $table->string('why_igsk_text')->nullable();
            $table->string('goal')->nullable();
            $table->string('mission')->nullable();
            $table->string('vision')->nullable();
            $table->string('igsk_rules')->nullable();
            $table->string('students_rules')->nullable();
            $table->string('parents_rules')->nullable();
            $table->string('libraries_text')->nullable();
            $table->string('admissin_process')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitedatas');
    }
};
