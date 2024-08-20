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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Tự động tạo cột ID tự tăng
            $table->string('name'); // Tên sự kiện
            $table->string('location')->nullable(); // Địa điểm tổ chức
            $table->text('description')->nullable(); // Mô tả sự kiện
            $table->timestamp('start_time'); // Thời gian bắt đầu
            $table->timestamp('end_time')->nullable(); // Thời gian kết thúc (có thể để trống)
            $table->string('image')->nullable(); // Hình ảnh đại diện (có thể để trống)
            $table->string('status')->default('upcoming'); // Trạng thái sự kiện
            $table->timestamps(); // Tạo các cột 'created_at' và 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
