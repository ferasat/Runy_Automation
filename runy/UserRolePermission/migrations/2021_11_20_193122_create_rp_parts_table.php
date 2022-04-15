<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateRpPartsTable extends Migration
{
    /*
     * تعریف بخش های مختلف سیستم به صورت جزئی مثلا تور یا مثلا حذف تور
     *یعنی حذف تور خودش یک بخش می باشد که بعد بتونیم به کاربر اجازه بدیم یا نه ندیم
     *  */
    public function up()
    {
        Schema::create('rp_parts', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 25);
            $table->string('description' , 75)->nullable();
            $table->string('slug' , 20)->unique();
            $table->timestamps();
        });



    }


    public function down()
    {
        Schema::dropIfExists('rp_parts');
    }
}
