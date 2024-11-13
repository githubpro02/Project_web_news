<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_views', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Liên kết với bảng posts
            $table->date('view_date'); // Ngày cụ thể
            $table->integer('view_count')->default(0); // Số lượt xem trong ngày

            $table->timestamps();

            // Thiết lập unique để tránh trùng lặp view cho một ngày và một bài viết
            $table->unique(['post_id', 'view_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_views');
    }
};