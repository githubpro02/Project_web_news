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
            $table->foreignId('post_id')->constrained()->onDelete('cascade');  // Liên kết với bảng posts
            $table->date('view_date');  // Ngày cụ thể để lưu lượt xem
            $table->integer('views')->default(0);  // Số lượt xem trong ngày
            $table->timestamps();

            $table->unique(['post_id', 'view_date']);  // Đảm bảo mỗi bài viết chỉ có một dòng cho mỗi ngày
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