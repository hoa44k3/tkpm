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
        Schema::create('teacher_reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courses_id')->constrained('courses')->onDelete('cascade'); // Khóa ngoại liên kết với bảng courses
            $table->string('student_name'); // Tên học viên
            $table->integer('rating'); // Điểm đánh giá (1 đến 5)
            $table->text('review'); // Đánh giá chi tiết
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_reviews');
    }
};
