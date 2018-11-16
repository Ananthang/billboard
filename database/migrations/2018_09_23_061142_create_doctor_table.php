<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Doctor_regNo',50)->unique();
            $table->string('username',50);
            $table->string('email',50)->unique();
            $table->string('password',100);
            $table->integer('phonenumber')->unique();
            $table->rememberToken();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Doctors');
    }
}
