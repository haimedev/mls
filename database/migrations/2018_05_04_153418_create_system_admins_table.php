<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_admin', function (Blueprint $table) 
        {
            $table->increments('sa_id');
            $table->string('sa_firstname', 25);
            $table->string('sa_lastname', 20);
            $table->string('sa_email', 30);
            $table->string('sa_username', 20);
            $table->string('sa_password', 20);
            $table->string('sa_password_confirm', 20);
            $table->string('sa_nickname', 20);
            $table->string('sa_active', 1)->default('1');
            //$table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sys_admin');
    }
}
