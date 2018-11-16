<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_relation', 100)->default('text');
            $table->string('occupation', 100)->default('text');
            $table->integer('age');
            $table->string('illness', 100)->nullable()->default('text');
            $table->string('ifdeadcauseofdeath', 100)->nullable()->default('text');
            $table->string('students_regNo')->on('students');
            $table->foreign('students_regNo')->references('regNo')->on('students')->onDelete('cascade');
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
        Schema::dropIfExists('family_members');
    }
}
