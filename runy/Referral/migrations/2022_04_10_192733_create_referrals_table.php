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
            $table->string('signature_from')->comment('امضای در خواست کننده');
            $table->bigInteger('to')->comment('ایدی کاربر دریافت کننده درخواست');
            $table->string('signature_to')->comment('امضای دریافت کننده');
            $table->string('description')->comment('توضیحات')->nullable();
            $table->string('type')->comment('نوع');
            $table->bigInteger('type_id')->comment('آیدی نوع');
            $table->boolean('status' )->nullable()->comment('0 تاییدنشده - 1 تایید شده');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('referrals');
    }
};
