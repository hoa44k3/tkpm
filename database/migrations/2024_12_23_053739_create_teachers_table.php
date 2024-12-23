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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên giáo viên
            $table->string('title'); // Chức danh
            $table->text('bio'); // Tiểu sử
            $table->string('photo')->nullable(); // Ảnh giáo viên
            $table->decimal('rating', 2, 1)->default(0.0); // Đánh giá
            $table->integer('experience_years'); // Số năm kinh nghiệm
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
