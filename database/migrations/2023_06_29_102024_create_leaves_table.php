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
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->string('acedmic_year');
            $table->string('semester_no');
            $table->string('teacher_name');
            $table->string('sure_name');
            $table->string('school_level');
            $table->string('days');
            $table->string('periods');
            $table->string('sub_class');
            $table->string('subject_teach');
            $table->string('book');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaves');
    }
};
