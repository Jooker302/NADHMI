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
        Schema::create('shedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('academic_year');
            $table->unsignedInteger('semester_number');
            $table->string('school_level');
            $table->string('teacher_name');
            $table->string('teacher_number');
            $table->string('teacher_surname');
            $table->string('teacher_line');
            $table->string('teacher_speciality');
            $table->string('day');
            $table->string('periods');
            $table->string('class_name');
            $table->string('sub_class_name');
            $table->string('status');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shedules');
    }
};
