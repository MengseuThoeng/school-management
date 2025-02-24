<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_code');
            $table->string('course_name');
            $table->string('syllabus');
            $table->unsignedInteger('durations')->default(1); // Match controller default
            $table->decimal('price', 8, 2); // Required, no nullable
            $table->text('description'); // Changed to text for longer content
            $table->foreignId('major_id')->constrained('majors', 'id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};