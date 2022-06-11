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
        Schema::create('overtime_forms', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->time('date');
            $table->time('start');
            $table->time('end');
            $table->string('duration');
            $table->string('for')->nullable();
            $table->string('description')->nullable();
            $table->enum('status', ['Approved' , 'In progress' , 'Not approved'])->nullable();
            $table->bigInteger('person_1' )->nullable()->comment('');
            $table->string('signature_1' )->nullable()->comment('');
            $table->boolean('approve_1' )->default(0)->comment('');
            $table->bigInteger('person_2' )->nullable()->comment('');
            $table->string('signature_2' )->nullable()->comment('');
            $table->boolean('approve_2' )->default(0)->comment('');
            $table->bigInteger('person_3' )->nullable()->comment('');
            $table->string('signature_3' )->nullable()->comment('');
            $table->boolean('approve_3' )->default(0)->comment('');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('overtime_forms');
    }
};
