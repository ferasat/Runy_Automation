<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateUserRolePermissionsTable extends Migration
{

    public function up()
    {
        Schema::create('user_role_permissions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id');
            $table->bigInteger('rp_part_id');
            $table->boolean('access')->default(0);
            $table->timestamps();
        });

    }


    public function down()
    {
        Schema::dropIfExists('user_role_permissions');
    }
}
