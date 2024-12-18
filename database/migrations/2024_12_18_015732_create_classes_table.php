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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name');  // Tên lớp học
            $table->text('description');  // Mô tả lớp học
            $table->string('age_group');  // Nhóm tuổi
            $table->string('time');  // Thời gian lớp học
            $table->integer('class_size');  // Số lượng học viên
            $table->decimal('fee', 8, 2);  // Học phí
            $table->string('image')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};