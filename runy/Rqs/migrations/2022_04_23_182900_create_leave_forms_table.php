<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('leave_forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->date('leave_start');
            $table->time('leave_start_time');
            $table->date('leave_end');
            $table->time('leave_end_time');
            $table->enum('leave_type' , ['Vacation','Sick','Quitting','Other']);
            $table->boolean('accept' )->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('leave_forms');
    }
};
