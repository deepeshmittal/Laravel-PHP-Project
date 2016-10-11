// the maximum number of courses that can be
// in any of the courses sections
var MAX_COURSE_LIMIT = 30;
var MAX_TABLE_LIMIT = 5;

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
    if ( $('#is_us_citizen').val().toLowerCase() == 'no' ) {
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
    if ( $('#takenGRE').val().toLowerCase() == 'yes' ) {
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
    if ( $('#addressSameAsAbove').val().toLowerCase() == 'no' ) {
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
    if ( $('#prevMTBIPart').val().toLowerCase() == 'yes' ) {
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
    if ( $('#is_permanent_resident').val().toLowerCase() == 'yes' ) {
        $('#alien_resident_detail').show();
        $('#alien_resident_no').val('').attr('disabled', false);
    } else {
        $('#alien_resident_detail').hide();
        $('#alien_resident_no').val('').attr('disabled', 'disabled');
    }
}

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
