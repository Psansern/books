<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_code');
            $table->string('course_name_th');
            $table->string('course_name_en');
            $table->string('course_short_name_th');
            $table->string('course_short_name_en');
            $table->string('course_type');
            $table->integer('course_years');
            $table->integer('major_id')->unsigned();
            $table->integer('faculty_id')->unsigned();
            $table->foreign('major_id')->references('id')->on('major');
            $table->foreign('faculty_id')->references('id')->on('faculty');
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
        Schema::dropIfExists('course');
    }
}
