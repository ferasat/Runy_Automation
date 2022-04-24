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
        Schema::create('correction_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('book_id');
            $table->date('date');
            $table->string('passenger_name');
            $table->string('supplier')->nullable();
            $table->string('supplier_rate')->nullable();
            $table->string('applicant')->nullable();
            $table->string('applicant_rate')->nullable();
            $table->boolean('cancel_hotel')->default(0);
            $table->integer('penalty_cancellation_share')->nullable();
            $table->integer('cancel_fine_hotel')->nullable();
            $table->string('counter_signature')->nullable();
            $table->string('accounting_signature')->nullable();
            $table->bigInteger('accounting_user_id')->nullable();
            $table->string('status')->nullable();
            $table->string('description')->nullable();
            $table->string('currency')->nullable();
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('correction_requests');
    }
};
