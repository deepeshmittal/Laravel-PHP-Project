<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
    protected $fillable = array(
        'lastName',
        'firstName',
        'middleName',
        'nickName',
        'gender',
        'dateOfBirth',
        'ethnicity',
        'otherEthnicity',
        'isUsCitizen',
        'isPermanentResident',
        'alienResidentNo',
        'birthCity',
        'birthState',
        'birthCountry',
        'currentStreet',
        'currentCity',
        'currentState',
        'currentCountry',
        'currentZip',
        'currentHomePhone',
        'currentMobilePhone',
        'emailAddress',
        'alternateEmailAddress',
        'addressSameAsAbove',
        'permanentStreet',
        'permanentCity',
        'permanentState',
        'permanentCountry',
        'permanentZip',
        'permanentHomePhone',
        'currentCollege',
        'majorFieldStudy',
        'minorFieldStudy',
        'currentGraduationDate',
        'overallGPA',
        'takenGRE',
        'dateGRE',
        'recentExpAct',
        'prevMTBIPart',
        'dateMTBIPart',
        'hearAboutMTBI',
        'refFacultyName',
        'refFacultyTitle',
        'refFacultyAddress',
        'refFacultyEmail',
        'refFacultyPhoneNumber',
    );
}
