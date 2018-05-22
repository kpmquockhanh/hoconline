<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_user', function (Blueprint $table){
            $table->increments('id');
            $table->integer('id_course')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->foreign('id_course')->references('id')->on('Course');
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
