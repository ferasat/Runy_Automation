<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUserRolesTable extends Migration
{

    public function up()
    {
        Schema::create('user_roles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id');
            $table->bigInteger('user_id');
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
