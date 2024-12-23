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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id')->after('id'); // ID giáo viên
            $table->unsignedBigInteger('user_id')->nullable(); // ID người dùng
            $table->decimal('rating', 2, 1); // Đánh giá (1.0 - 5.0)
            $table->text('comment')->nullable(); // Bình luận
            $table->unsignedBigInteger('course_id'); 
            $table->timestamps();

            // Khóa ngoại
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade'); // Khóa ngoại đến bảng courses
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
