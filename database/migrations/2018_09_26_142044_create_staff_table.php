<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->string('regNo',100)->primary();
            $table->string('faculty', 100)->default('text');
            $table->string('fullname', 100)->default('text');
            $table->integer('age');
            $table->string('sex',10);
            $table->string('maritalStatus',10);
            $table->string('residentAddress',100)->default('text');
            $table->string('permanentAddress', 100)->default('text');
            $table->string('designation', 100);
            $table->string('department', 100);
            $table->integer('height');
            $table->integer('weight');
            $table->string('bloodGroup',5);
            $table->string('phonenumber');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('staff');
    }
}
