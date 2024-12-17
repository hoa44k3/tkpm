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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('teacher_name'); // Tên giáo viên
            $table->string('teacher_title'); // Chức danh giáo viên (Teacher)
            $table->string('age_group'); // Nhóm tuổi (5-10 Years)
            $table->string('time'); // Thời gian lớp học (8-10am)
            $table->integer('class_size'); // Số lượng học viên trong lớp (28)
            $table->decimal('fee', 8, 2); // Học phí ($50)
            $table->string('course_title'); // Tên khóa học (Drawing Class)
            $table->text('description'); // Mô tả khóa học
            $table->decimal('rating', 2, 1); // Đánh giá (4.5 stars)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
