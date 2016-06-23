<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_applications', function (Blueprint $table) {
            $table->increments('application_id');
            $table->string('lastName',50)->nullable();
            $table->string('firstName',50)->nullable();
            $table->string('middleName',30)->nullable();
            $table->string('nickName',50)->nullable();
            $table->string('gender',1)->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('ethnicity',30)->nullable();
            $table->string('otherEthnicity',30)->nullable();
            $table->string('isUsCitizen',1)->nullable();
            $table->string('isPermanentResident',1)->nullable();
            $table->string('alienResidentNo',20)->nullable();
            $table->string('birthCity',30)->nullable();
            $table->string('birthState',30)->nullable();
            $table->string('birthCountry',30)->nullable();
            $table->string('currentStreet',80)->nullable();
            $table->string('currentCity',30)->nullable();
            $table->string('currentState',30)->nullable();
            $table->string('currentCountry',30)->nullable();
            $table->string('currentZip',10)->nullable();
            $table->string('currentHomePhone',15)->nullable();
            $table->string('currentMobilePhone',15)->nullable();
            $table->string('emailAddress',50)->nullable();
            $table->string('alternateEmailAddress',50)->nullable();
            $table->string('permanentStreet',80)->nullable();
            $table->string('permanentCity',30)->nullable();
            $table->string('permanentState',30)->nullable();
            $table->string('permanentCountry',30)->nullable();
            $table->string('permanentZip',10)->nullable();
            $table->string('permanentHomePhone',15)->nullable();
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
        Schema::drop('student_applications');
    }
}
