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
            $table->increments('id');
            $table->string('lastName',50)->nullable();
            $table->string('firstName',50)->nullable();
            $table->string('middleName',30)->nullable();
            $table->string('nickName',50)->nullable();
            $table->string('gender',10)->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('ethnicity',30)->nullable();
            $table->string('otherEthnicity',30)->nullable();
            $table->string('isUsCitizen',10)->nullable();
            $table->string('isPermanentResident',10)->nullable();
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
            $table->string('addressSameAsAbove',10)->nullable();
            $table->string('permanentStreet',80)->nullable();
            $table->string('permanentCity',30)->nullable();
            $table->string('permanentState',30)->nullable();
            $table->string('permanentCountry',30)->nullable();
            $table->string('permanentZip',10)->nullable();
            $table->string('permanentHomePhone',15)->nullable();
            $table->string('currentCollege',50)->nullable();
            $table->string('majorFieldStudy',25)->nullable();
            $table->string('minorFieldStudy',25)->nullable();
            $table->string('currentGraduationDate',20)->nullable();
            $table->string('overallGPA',10)->nullable();
            $table->string('takenGRE',10)->nullable();
            $table->string('dateGRE',20)->nullable();
            $table->string('attachFileOne',100)->nullable();
            $table->string('attachFileTwo',100)->nullable();
            $table->string('recentExpAct',200)->nullable();
            $table->string('prevMTBIPart',10)->nullable();
            $table->string('dateMTBIPart',20)->nullable();
            $table->string('hearAboutMTBI',200)->nullable();
            $table->string('refFacultyName',50)->nullable();
            $table->string('refFacultyTitle',20)->nullable();
            $table->string('refFacultyAddress',100)->nullable();
            $table->string('refFacultyEmail',50)->nullable();
            $table->string('refFacultyPhoneNumber',20)->nullable();
            $table->timestamps();
            $table->string('status',30)->default('pending');
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
