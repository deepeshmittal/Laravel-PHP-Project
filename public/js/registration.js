// the maximum number of courses that can be
// in any of the courses sections
var MAX_COURSE_LIMIT = 30;
var MAX_TABLE_LIMIT = 5;

// // submit the form
// function submitApplication() {
//     preProcessForm();
//
//     if ( !validateForm() ) {
//         window.scroll(0, 0);
//         return;
//     }
//
//     if ( confirm("Are you sure you want to submit the form?") ) {
//         document.mtbireg.submit();
//     }
// }
//
// // pre-process the form before submitting
// function preProcessForm() {
//     // first trim all fields
//     var inputFields = document.getElementsByTagName('input');
//     var errors = false;
//     var errorMessages = [];
//     for ( var i = 0; i < inputFields.length; i++ ) {
//         var el = inputFields[i];
//         if ( el.type.toLowerCase() == 'text' ) {
//             el.value = $.trim(el.value);
//         }
//     }
//     var textareaFields = document.getElementsByTagName('textarea');
//     for ( var i = 0; i < textareaFields.length; i++ ) {
//         var el = textareaFields[i];
//         el.value = $.trim(el.value);
//     }
// }

// user will not be allowed to submit the form until
// he agrees to the terms
function toggleSubmit() {
    var agree_to_terms = document.getElementById('agreeToTermsCheck');
    var submit_button  = document.getElementById('submitFinal');
    if ( agree_to_terms.checked == true ) {
        submit_button.disabled = false;
	//var div = document.getElementById('captcha-display-block'); 
	//div.innerHTML = "{!! app('captcha')->display(); !!}";
        // $('#captcha_section').show();
    } else {
        submit_button.disabled = true;
        // $('#captcha_section').hide();
    }
}

// toggle enabling of the permanent resident questions when
// the "Are you a US Citizen?" selection is changed
function onChangeIsUSCitizen() {
    if ( $('#is_us_citizen').val().toLowerCase() == 'n' ) {
        $('#permanent_resident_question').show();
        $('#is_permanent_resident').val('').attr('disabled', false);
    } else {
        $('#permanent_resident_question').hide();
        $('#is_permanent_resident').val('').attr('disabled', 'disabled');
        $('#alien_resident_no').val('').attr('disabled', 'disabled');
    }
}

// toggle enabling of the Other Ethnicity textbox when
// Ethnicity is changed to/from "Other"
function toggleEnablingOtherEthnicity() {
    if ( $('#ethnicity').val().toLowerCase() == 'other' ) {
        $('#other_ethnicity_detail').show();
        $('#other-ethnicity').val('').attr('disabled', false);
    } else {
        $('#other_ethnicity_detail').hide();
        $('#other-ethnicity').val('').attr('disabled', 'disabled');
    }
}

// toggle enalbing of the GRE Attended Date textbox when
// Has Taken GRE value is changed
function toggleEnablingGREAttendedDate() {
    if ( $('#takenGRE').val().toLowerCase() == 'y' ) {
        $('#dateGREDetail').show();
        $('#dateGRE').val('').attr('disabled', false);
    } else {
        $('#dateGREDetail').hide();
        $('#dateGRE').val('').attr('disabled', 'disabled');
    }
}

// toggle enalbing of the GRE Attended Date textbox when
// Has Taken GRE value is changed
function enablingPermanentAddressBlock() {
    if ( $('#addressSameAsAbove').val().toLowerCase() == 'n' ) {
        $('#permanentAddressBlock').show();
        $('#permanentStreet').val('').attr('disabled', false);
        $('#permanentCity').val('').attr('disabled', false);
        $('#permanentState').val('').attr('disabled', false);
        $('#permanentCountry').val('').attr('disabled', false);
        $('#permanentZip').val('').attr('disabled', false);
        $('#permanentHomePhone').val('').attr('disabled', false);
    } else {
        $('#permanentAddressBlock').hide();
        $('#permanentStreet').val('').attr('disabled', 'disabled');
        $('#permanentCity').val('').attr('disabled', 'disabled');
        $('#permanentState').val('').attr('disabled', 'disabled');
        $('#permanentCountry').val('').attr('disabled', 'disabled');
        $('#permanentZip').val('').attr('disabled', 'disabled');
        $('#permanentHomePhone').val('').attr('disabled', 'disabled');
    }
}
//
function enablingMTBIAttendedDate(){
    if ( $('#prevMTBIPart').val().toLowerCase() == 'y' ) {
        $('#dateMTBIPartSection').show();
        $('#dateMTBIPart').val('').attr('disabled', false);
    } else {
        $('#dateMTBIPartSection').hide();
        $('#dateMTBIPart').val('').attr('disabled', 'disabled');
    }
}

// toggle enabling of the alien resident no when permanent resident
// is changed to/from "Yes"
function toggleEnablingAlienResidentNo() {
    if ( $('#is_permanent_resident').val().toLowerCase() == 'y' ) {
        $('#alien_resident_detail').show();
        $('#alien_resident_no').val('').attr('disabled', false);
    } else {
        $('#alien_resident_detail').hide();
        $('#alien_resident_no').val('').attr('disabled', 'disabled');
    }
}

// var fieldLabels = {
//     'lastname'       : 'Last Name',
//     'firstname'      : 'First Name',
//     'gender'         : 'Gender',
//     'ethnicity'      : 'Ethnicity',
//     'other_ethnicity': 'Other Ethnicity',
//     'date_of_birth'  : 'Date of Birth',
//     'ssn'            : 'Social Security Number',
//     'is_us_citizen'  : 'Are you a US citizen?',
//     'alien_resident_no' : 'Alien Resident Number',
//     'street'         : 'Street',
//     'city'           : 'City',
//     'state'          : 'State',
//     'zip'            : 'Zip',
//     'country'        : 'Country',
//     'home_phone'     : 'Home Phone',
//     'office_phone'   : 'Office Phone',
//     'primary_email'  : 'Primary Email',
//     'alternate_email' : 'Alternate Email',
//     'permanent_zip'  : 'Permanent Zip',
//     'permanent_home_phone' : 'Permanent Home Phone',
//     'current_university': 'Universitiy/College/Institution',
//     'current_major'  : 'Major Field of Study',
//     'current_minor'  : 'Minor Field of Study',
//     'current_expected_graduation_date' : "Expected Date of Graduation",
//     'overall_gpa'    : 'Overall GPA',
//     'has_taken_gre'  : 'Have you taken GRE',
//     'gre_attended_date' : 'GRE Attended Date',
//     'faculty_name'   : 'Faculty Name',
//     'faculty_title'  : 'Faculty Title',
//     'faculty_email'  : 'Faculty Email',
//     'faculty_phone'  : 'Faculty Phone',
//     'answer_5'       : 'Answer for 5th question',
//     'prev_ref'	    : 'How did you hear about MTBI?'
//     //'has_taken_mtbi' : 'has taken mtbi'
//
// };
//
// var mandatoryAnswers = [];
//
// // function for validating the form entries
// function validateForm() {
//     if ( !document.getElementById('agree_to_terms').checked ) return false;
//
//     if ( $("#captcha_text").val() == "" ) {
//         alert("Please enter captcha text in order to submit the form");
//         $("#captcha_text").focus();
//         return false;
//     }
//
//     var fieldsMissingData = [], errorMessages = [];
//     checkRequiredFields(fieldsMissingData, errorMessages);
//
//     validateDateFields(fieldsMissingData, errorMessages);
//
//     validateEmailFields(fieldsMissingData, errorMessages);
//     validateNumericFields(fieldsMissingData, errorMessages);
//     checkCourseRows(errorMessages);
//
//     if ( errorMessages.length ) {
//         $("#error_messages").html("Please correct the following errors<br>");
//         var ulEl = document.createElement('ul');
//         for ( i = 0; i < errorMessages.length; i++ ) {
//             var liEl = document.createElement('li');
//             liEl.innerHTML = errorMessages[i];
//             ulEl.appendChild(liEl);
//         }
//         $("#error_messages").append(ulEl).show();
//     } else {
//         $("#error_messages").hide().empty();
//     }
//
//     return !errorMessages.length;
// }

// function that checks whether all the required fields are filled.
// called on form validation
// function checkRequiredFields(fieldsMissingData, errorMessages) {
//
//     var mandatoryFields = ['lastname', 'firstname', 'gender', 'ethnicity','date_of_birth', 'is_us_citizen',
//         'street', 'city', 'state', 'zip', 'country', 'primary_email', 'current_university',
//         'current_major', 'current_minor', 'current_expected_graduation_date', 'overall_gpa',
//         'has_taken_gre', 'faculty_name', 'faculty_title', 'faculty_email', 'has_taken_mtbi', 'prev_ref'];
//     if ( $('#ethnicity').val().toLowerCase() == "other" && $('#other_ethnicity').val() == '' ) {
//         mandatoryFields.push('other_ethnicity');
//     }
//     if ( mandatoryAnswers.length ) {
//         for ( var i = 0; i < mandatoryAnswers.length; i++ ) {
//             mandatoryFields.push(mandatoryAnswers[i]);
//         }
//     }
//
//     /*if (!$.trim($("#prev_ref").val())){
//      field.addClass('field_error');
//      fieldsMissingData.push('prev_ref');// Last index of mandatoryFields
//      }
//      /*if($('textarea[name="prev_ref"]').innerHTML == ''){
//      field.addClass('field_error');
//      fieldsMissingData.push('prev_ref');// Last index of mandatoryFields
//      }*/
//
//
//     for ( var i = 0; i < mandatoryFields.length; i++ ) {
//         var field = $('#' + mandatoryFields[i]);
//         if ( field.val() == '' ) {
//             field.addClass('field_error');
//             fieldsMissingData.push(mandatoryFields[i]);
//         } else {
//             field.removeClass('field_error');
//         }
//     }
//
//     if ( $('#ethnicity').val().toLowerCase() == "other" && $('#other_ethnicity').val() == '' ) {
//         errorMessages.push('Other ethnicity field is required since Ethnicity is chosen as "Other"');
//         mandatoryFields.push('other_ethnicity');
//     }
//
//     if ( fieldsMissingData.length )
//         errorMessages.push("<b>Required fields missing data</b>: " +
//             $.map(fieldsMissingData, function(el){return fieldLabels[el]}).join(', '));
//
//     var isPermanentResidentEl = $('#is_permanent_resident');
//     var alienResidentNoEl = $('#alien_resident_no');
//     isPermanentResidentEl.removeClass('field_error');
//     alienResidentNoEl.removeClass('field_error');
//
//     if ( $('#is_us_citizen').val() == 'n' ) {
//         if ( isPermanentResidentEl.val() == '' ) {
//             isPermanentResidentEl.addClass('field_error');
//             errorMessages.push('Are you a permanent resident field is required when Is US Citizen is chosen as No');
//         } else {
//             if ( isPermanentResidentEl.value == 'y' && alienResidentNoEl.val() == '' ) {
//                 alienResidentNoEl.addClass('field_error');
//                 errorMessages.push("Alien Resident Number is a required when Are you a permananent resident is chosen as Yes");
//             }
//         }
//     }
//
//     /*if ( $('#has_taken_mtbi').val() == '' ) {
//      {
//      errorMessages.push('Are you a permanent resident field is required when Is US Citizen is chosen as No');
//      mandatoryFields.push('other_ethnicity');
//      }
//      }*/
//
// }
//
// // function that checks whether all the date fields are valid.
// function validateDateFields(fieldsMissingData, errorMessages) {
//     var dateElIds = ['date_of_birth'];
//
//     for ( i = 0; i < dateElIds.length; i++ ) {
//         var dateEl = $('#' + dateElIds[i]);
//         var isValidResult = dateEl.val() != '' ? isDate(dateEl.val(), fieldLabels[dateElIds[i]])
//             : true;
//         if ( isValidResult !== true && !isValidResult.isValid ) {
//             dateEl.addClass('field_error');
//             errorMessages.push(isValidResult.errorMessage);
//         } else {
//             if ( $.inArray(dateElIds[i], fieldsMissingData) == -1 )
//                 dateEl.removeClass('field_error');
//         }
//     }
//
//     var monthYearElIds = ['current_expected_graduation_date', 'gre_attended_date'];
//
//     for ( i = 0; i < monthYearElIds.length; i++ ) {
//         var monthYearEl = $('#' + monthYearElIds[i]);
//         var isValidResult = monthYearEl.val() != ''
//             ? isValidMonthYear(monthYearEl.val(), fieldLabels[monthYearElIds[i]])
//             : true;
//         if ( isValidResult !== true && !isValidResult.isValid ) {
//             monthYearEl.addClass('field_error');
//             errorMessages.push(isValidResult.errorMessage);
//         } else {
//             if ( $.inArray(monthYearElIds[i], fieldsMissingData) == -1 )
//                 monthYearEl.removeClass('field_error');
//         }
//     }
// }
//
// // function that checks whether the email fields are valid
// function validateEmailFields(fieldsMissingData, errorMessages) {
//     var validEmailRegex = new RegExp('^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\\.[A-Za-z]{2,4}$');
//     var emailFieldIds = ['primary_email', 'alternate_email', 'faculty_email'];
//
//     for ( i = 0; i < emailFieldIds.length; i++ ) {
//         var emailFieldEl = $('#' + emailFieldIds[i]);
//         if ( emailFieldEl.val() != '' ) {
//             if ( !validEmailRegex.test(emailFieldEl.val()) ) {
//                 emailFieldEl.addClass('field_error');
//                 errorMessages.push(fieldLabels[emailFieldIds[i]] + " does not appear to be a proper email address");
//             } else emailFieldEl.removeClass('field_error');
//         } else {
//             if ( $.inArray(emailFieldIds[i], fieldsMissingData) == -1 )
//                 emailFieldEl.removeClass('field_error');
//         }
//     }
// }
//
// // function that checks whether the numeric fields are valid
// function validateNumericFields(fieldsMissingData, errorMessages) {
//     validatePhoneFields(fieldsMissingData, errorMessages);
//     var nineDigitNumericFieldIds = ['ssn', 'alien_resident_no'];
//     for ( var i = 0; i < nineDigitNumericFieldIds.length; i++ ) {
//         var fieldEl = $('#' + nineDigitNumericFieldIds[i]);
//         if ( fieldEl.val() != '' && !fieldEl.val().match(/^\d{9}$/) ) {
//             fieldEl.addClass('field_error');
//             errorMessages.push(fieldLabels[nineDigitNumericFieldIds[i]] + " has to be a 9 digit numeral");
//         } else {
//             fieldEl.removeClass('field_error');
//         }
//     }
//
//     var overallGPAEl = $('#overall_gpa');
//     if ( overallGPAEl.val() != '' && !overallGPAEl.val().match(/^\d+(\.\d{1,2})?$/) ) {
//         overallGPAEl.addClass('field_error');
//         errorMessages.push("Overall GPA has to be decimal number with atmost 2 decimal digits");
//     } else if ( $.inArray('overall_gpa', fieldsMissingData) == -1 ) {
//         overallGPAEl.removeClass('field_error');
//     }
// }
//
// // function that checks whether the phone fields are valid
// function validatePhoneFields(fieldsMissingData, errorMessages) {
//     var validPhoneZipRegex = new RegExp('^[0-9\\- ]+$');
//     var phoneZipFieldIds = ['home_phone', 'office_phone', 'permanent_home_phone',
//         'faculty_phone', 'zip', 'permanent_zip'];
//
//     for ( i = 0; i < phoneZipFieldIds.length; i++ ) {
//         var phoneZipFieldEl = $('#' + phoneZipFieldIds[i]);
//         if ( phoneZipFieldEl.val() != '' ) {
//             if ( !validPhoneZipRegex.test(phoneZipFieldEl.val()) ) {
//                 phoneZipFieldEl.addClass('field_error');
//                 errorMessages.push(fieldLabels[phoneZipFieldIds[i]] + " can have only numerals");
//             } else phoneZipFieldEl.removeClass('field_error');
//         } else {
//             if ( $.inArray(phoneZipFieldIds[i], fieldsMissingData) == -1 )
//                 phoneZipFieldEl.removeClass('field_error');
//         }
//     }
// }

// add new course in any of course section
// will not add a new course if the number of courses
// is already MAX_COURSE_LIMIT
function addNewCourse(subject) {
    var courseTable = document.getElementById(subject + 'CourseTable');
    var courseTableBody = document.getElementById(subject + 'CourseTableBody');
    var newCourseIndex = courseTable.rows.length + 1;

    if ( newCourseIndex > MAX_COURSE_LIMIT ) {
        alert("You have reached the maximum limit for the number of courses");
        return;
    }

    var newRow = document.createElement('tr');
    var newCell = document.createElement('td');
    newCell.innerHTML = "<input class='form-control' name='" + subject + "course" +
        newCourseIndex + "' type='text' size='12' placeholder='Course #' required>";
    newRow.appendChild(newCell);
    var newCell = document.createElement('td');
    newCell.innerHTML = "<input class='form-control' name='" + subject + "title" +
        newCourseIndex + "' type='text' size='28' placeholder='Course Title' required>";
    newRow.appendChild(newCell);
    var newCell = document.createElement('td');
    newCell.innerHTML = "<input class='form-control' name='" + subject + "grade" +
        newCourseIndex + "' type='text' size='10' placeholder='Grades' required>";
    newRow.appendChild(newCell);

    courseTableBody.appendChild(newRow);
}

function deleteCourse(subject) {
    var courseTable = document.getElementById(subject + 'CourseTable');
    var newCourseIndex = courseTable.rows.length;

    if ( newCourseIndex == 0 ) {
        alert("You have not added any course yet !! Invalid operation..");
        return;
    }

    courseTable.deleteRow(newCourseIndex - 1);
}

function addRowTable(tablename) {
    var tempTable = document.getElementById(tablename + 'Table');
    var tempTableBody = document.getElementById(tablename + 'TableBody');
    var newRowIndex = tempTable.rows.length + 1;

    if ( newRowIndex > MAX_TABLE_LIMIT ) {
        alert("You have reached the maximum limit for the number of " + tablename);
        return;
    }

    var newRow = document.createElement('tr');
    var newCell = document.createElement('td');
    newCell.innerHTML = '<input type="text" class="form-control" name="' + tablename + newRowIndex +
        '" id="' + tablename + newRowIndex + '" placeholder="' + tablename + ' ' + newRowIndex + '" required>';
    newRow.appendChild(newCell);
    tempTableBody.appendChild(newRow);
}

function removeRowTable(tablename) {
    var tempTable = document.getElementById(tablename + 'Table');
    var tableIndex = tempTable.rows.length;

    if ( tableIndex == 0 ) {
        alert("You have not entered any " + tablename + " yet !! Invalid operation.. ");
        return;
    }

    tempTable.deleteRow(tableIndex - 1);
}

// checks whether in the all course rows either all the 3 fields
// are filled or none of them are filled
// function checkCourseRows(errorMessages) {
//     var thisForm = document.mtbireg;
//
//     var courseTypes = ['math', 'science', 'currmathscience'];
//     var numMathCourses = 0, numScienceCourses = 0;
//
//     var courseError = false;
//
//     for ( var i = 0; i < courseTypes.length; i++ ) {
//         var courseType = courseTypes[i];
//         var numCourses = $('#' + courseType + 'coursetable').attr('rows').length - 1;
//         for ( var j = 1; j <= numCourses; j++ ) {
//             var courseIdEl = thisForm[courseType + 'course' + j];
//             var courseTitleEl =  thisForm[courseType + 'title' + j];
//             var courseGradeInstEl = thisForm[courseType + 'gradeinst' + j];
//             if ( !( ( courseIdEl.value != '' && courseTitleEl.value != '' &&
//                 courseGradeInstEl.value != '' ) ||
//                 ( courseIdEl.value == '' && courseTitleEl.value == '' &&
//                 courseGradeInstEl.value == '' ) ) ) {
//                 $(courseIdEl).addClass('field_error');
//                 $(courseTitleEl).addClass('field_error');
//                 $(courseGradeInstEl).addClass('field_error');
//                 courseError = true;
//             } else {
//                 $(courseIdEl).removeClass('field_error');
//                 $(courseTitleEl).removeClass('field_error');
//                 $(courseGradeInstEl).removeClass('field_error');
//                 if ( courseIdEl.value != '' ) {
//                     if ( courseType == 'math' ) numMathCourses++;
//                     else if ( courseType == 'science') numScienceCourses++;
//                 }
//             }
//         }
//     }
//
//     if ( courseError ) errorMessages.push("For courses please either fill all three course id, course title and grade institution or leave them all blank");
//     if ( !numMathCourses || !numScienceCourses )
//         errorMessages.push("Atleast one MATHEMATICS course AND one SCIENCE course has to be entered");
// }
