<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {

            $table->string('regno')->primary();
            $table->string('faculty', 100)->default('text');
            $table->string('fullname', 100)->default('text');
            $table->string('residentAddress',100)->default('text');
            $table->string('permanentAddress', 100)->default('text');
            $table->date('dob');
            $table->string('sex',10);
            $table->string('maritalStatus',10);
            $table->string('LastSchoolAttend',10);
            $table->string('parentsGuardianName',50);
            $table->string('parentsGuardianAddress',100);
            $table->string('parentsGuardianPhoneNumber',100);
            $table->string('Operation',100);
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
        Schema::dropIfExists('students');
    }
}
