<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('referrals', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('from')->comment('ایدی کاربر ارسال کننده درخواست');
            $table->bigInteger('to')->comment('ایدی کاربر دریافت کننده درخواست');
            $table->string('description')->comment('توضیحات')->nullable();
            $table->string('type')->comment('نوع');
            $table->bigInteger('type_id')->comment('آیدی درخواست پرداخت');
            $table->boolean('status' )->default('0')->comment('0 چک نشده - 1 چک شده');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referrals');
    }
};
