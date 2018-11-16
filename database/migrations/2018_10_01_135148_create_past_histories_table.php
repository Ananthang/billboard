<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePastHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('past_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('students_regNo', 50)->on('students');
            $table->foreign('students_regNo')->references('regNo')->on('students')->onDelete('cascade');
            $table->string('past_disease', 30);
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
        Schema::dropIfExists('past_histories');
    }
}
