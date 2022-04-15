<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('family')->nullable();
            $table->string('cellPhone')->nullable()->unique();
            $table->string('username')->nullable()->unique();
            $table->string('pic')->nullable()->default('theme/img/avatar-1.png');
            $table->string('Signature')->nullable()->default('theme/img/avatar-1.png');
            $table->string('codeMeli')->nullable()->unique();
            $table->longText('about')->nullable();
            $table->enum('gender' , ['male','female'])->nullable()->default('male');
            $table->string('passport')->nullable();
            $table->date('passportExpDate')->nullable();
            $table->date('birthDate')->nullable()->comment('تاریخ تولد');
            $table->enum('status', ['active', 'disabled'])->default('active');
            $table->enum('levelUser' , ['SAdmin','Admin' , 'Counter', 'salesManager' , 'Accountants'])->default('Counter')->nullable();
            $table->string('levelPermission')->default('1')->nullable(); // 1 Member - 2 Counter - 3 Writer - 4 Editor - 5 salesManager - 6 Accountants - 9 Admin - 10 SAdmin
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });


        DB::table('users')->insert( [
            'name' => 'Amin' ,
            'family' => 'Ferasat' ,
            'status' => 'active' ,
            'levelUser' => 'SAdmin' ,
            'levelPermission' => '10' ,
            'pic' => 'theme/img/admin.jpg' ,
            'cellPhone' => '9372088771' ,
            'email' => 'admin@tarahsite.net' ,
            'password' => bcrypt('@dmiN98A' ),
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
