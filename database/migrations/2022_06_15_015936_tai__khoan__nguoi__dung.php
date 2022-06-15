<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaiKhoanNguoiDung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taiKhoanNguoiDung', function (Blueprint $table) {
            $table->increments('maNguoiDung');
            $table->string('email');
            $table->string('matKhau');
            $table->string('diaChi');
            $table->string('ngaySinh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taiKhoanNguoiDung');
    }
}
