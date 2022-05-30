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
        Schema::create('referral_process_makers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('process_id')->comment('ایدی پروژه ای که برای یک درخواست یاجاد می شود');// این ایدی بین تمام ارجاعات یم فاریند یکسان هست
            $table->string('type');
            $table->string('type_id');
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
        Schema::dropIfExists('referral_process_makers');
    }
};
