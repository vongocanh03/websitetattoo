<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên hình xăm
            $table->text('description')->nullable(); // Mô tả
            $table->string('media')->nullable(); // Hình ảnh hoặc video
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Liên kết thể loại
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
