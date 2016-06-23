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
        'permanentStreet',
        'permanentCity',
        'permanentState',
        'permanentCountry',
        'permanentZip',
        'permanentHomePhone'
    );
}
