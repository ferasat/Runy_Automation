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
        Schema::create('payment_requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ref_id')->nullable()->comment('آیدی فرایند شروع کننده فرایند ارجاع');
            $table->bigInteger('user_id');
            $table->string('book_id')->nullable();
            $table->bigInteger('price')->nullable();
            $table->enum('currency' , ['USA Dollar' , 'IR Rial' , 'UAE Dirham' , 'TUR Lira', 'Euro'])->nullable();
            $table->string('getter')->nullable()->comment('گیرنده پول *- در وجه');
            $table->string('passenger_name')->nullable()->comment('نام مسافر');
            $table->string('person_id')->nullable()->comment('ایدی کارت شناسایی - کد ملی');
            $table->string('cause')->nullable()->comment('بابت');
            $table->date('deadline')->nullable()->comment('مهلت پرداخت تا زمان');
            $table->string('name_bank')->nullable()->comment('نام بانک');
            $table->string('number_account_bank')->nullable()->comment('شماره حساب بانک');
            $table->string('number_cart_bank')->nullable()->comment('شماره کارت بانک');
            $table->string('account_owner_bank')->nullable()->comment('صاحب حساب بانکی');
            $table->longText('description')->nullable()->comment('توضیحات');
            $table->boolean('manager_approval')->default(0)->comment('نیار به تایید مدیریت');
            $table->enum('type_spent' , ['cash' , 'online' , 'transfer'])->nullable()->comment('نوع پرداخت');
            $table->string('status' )->nullable()->comment('1-counter 2-As Accounting Approval 3-As Manager Accounting Approval 4-Manager Approval 5-Manager Accounting');
            $table->bigInteger('person_1' )->nullable()->comment('');
            $table->string('signature_1' )->nullable()->comment('');
            $table->boolean('approve_1' )->default(0)->comment('');
            $table->bigInteger('person_2' )->nullable()->comment('');
            $table->string('signature_2' )->nullable()->comment('');
            $table->boolean('approve_2' )->default(0)->comment('');
            $table->bigInteger('person_3' )->nullable()->comment('');
            $table->string('signature_3' )->nullable()->comment('');
            $table->boolean('approve_3' )->default(0)->comment('');
            $table->bigInteger('person_4' )->nullable()->comment('');
            $table->string('signature_4' )->nullable()->comment('');
            $table->boolean('approve_4' )->default(0)->comment('');
            $table->bigInteger('person_5' )->nullable()->comment('');
            $table->string('signature_5' )->nullable()->comment('');
            $table->boolean('approve_5' )->default(0)->comment('');
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
        Schema::dropIfExists('payment_requests');
    }
};
