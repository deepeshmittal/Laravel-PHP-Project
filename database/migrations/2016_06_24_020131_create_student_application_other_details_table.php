<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentApplicationOtherDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_application_other_details', function (Blueprint $table) {
            $table->increments('detail_id');
            $table->integer('application_id')->unsigned();
            $table->string('detailType',30);
            $table->string('detailValue',80);
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
        Schema::drop('student_application_other_details');
    }
}
