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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->string('program');
            $table->string('shift');
            $table->string('semester');
            $table->string('full_name');
            $table->string('student_cnin', 13)->unique();;
            $table->string('father_name');
            $table->string('father_cnin', 13)->unique();;
            $table->string('mobile_number');
            $table->string('gender');
            $table->string('country');
            $table->date('birth_date');
            $table->string('city');
            $table->string('address');
            $table->string('email')->unique();;
            $table->string('password');
            $table->string('ssc');
            $table->string('ssc_board');
            $table->string('ssc_obtaine_marks');
            $table->string('ssc_total_marks');
            $table->string('ssc_year');
            $table->string('hsc');
            $table->string('hsc_board');
            $table->string('hsc_obtaine_marks');
            $table->string('hsc_total_marks');
            $table->string('hsc_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
