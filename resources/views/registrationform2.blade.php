@extends('header')

@section('content')
    <h4 style="margin-bottom: 1em;margin-top:1.5em;text-decoration: underline;">Education Details</h4>
    {!! Form::open(array('class'=>'form-horizontal','action'=>'StudentRegistration@submitPageTwo','onsubmit'=>"return confirm('Do you really want to submit the form?');")) !!}
        <fieldset>
            <div class="form-group">
                <label style="padding-top: 0" for="currentCollege" class="col-lg-4 control-label required">
                    University/College/Institution <br>(Current Enrollment)</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="currentCollege" name="currentCollege"
                           placeholder="University/College/Institution Name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="majorFieldStudy" class="col-lg-3 control-label required">Major Field of Study</label>
                <div class="col-lg-3 text_div">
                    <input type="text" class="form-control" id="majorFieldStudy" name="majorFieldStudy"
                           placeholder="Major Field of Study" required>
                </div>

                <label for="minorFieldStudy" class="col-lg-3 control-label required">Minor Field of Study</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="minorFieldStudy" name="minorFieldStudy"
                           placeholder="Minor Field of Study" required>
                </div>
            </div>

            <div class="form-group">

                <label for="graduationDate" class="col-lg-3 control-label required">
                    Expected Date of Graduation with bachelor's degree (MM/YYYY)</label>
                <div class="col-lg-3 text_div">
                    <input type="month" class="form-control" id="graduationDate" name="currentGraduationDate" required>
                </div>
                <label for="overallGPA" class="col-lg-3 control-label required">
                    Overall Grade Point Average (GPA)</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="overallGPA" name="overallGPA" required>
                </div>
            </div>

            <div class="form-group">
                <label for="takenGRE" class="col-lg-3 control-label required">Have you taken the GRE?</label>
                <div class="col-lg-3">
                    <select class="form-control" id="takenGRE" name="takenGRE" required
                            onchange="javascript:toggleEnablingGREAttendedDate()">
                        <option value="">Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <span id="dateGREDetail" style="display: none">
                    <label for="dateGRE" class="col-lg-3 control-label required">Please specify (MM/YYYY)</label>
                    <div class="col-lg-3 text_div">
                        <input type="month" class="form-control" id="dateGRE" name="dateGRE" required>
                    </div>
                </span>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>List all other colleges or
                        universities you have attended, if any</b><br>
                    <span style="font-size: 11px;font-style: italic">(maximum upto 5 colleges) </span></p>
                <div class="col-lg-6">
                    <table class="table" id="CollegeTable" >
                        <tbody id="CollegeTableBody"></tbody>
                    </table>
                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:addRowTable('College')">Add College</button>
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:removeRowTable('College')">Remove College</button>
                    <p style="font-size: 11px;font-style: italic;display: inline-block">(For every new row,
                        college details are required otherwise delete the row.)</p>
                </div>

            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>List all MATHEMATICS courses
                        which you have taken </b><br>
                    <span style="font-size: 11px;font-style: italic">(maximum upto 30 courses) </span></p>
                <div class="col-lg-8">
                    <table class="course-table table" id="mathCourseTable">
                        {{--<thead>--}}
                            {{--<tr>--}}
                                {{--<th style="width: 20%">Course Number</th>--}}
                                {{--<th style="width: 60%">Course Title</th>--}}
                                {{--<th style="width: 20%">Course Grade</th>--}}
                            {{--</tr>--}}
                        {{--</thead>--}}
                        <tbody id="mathCourseTableBody"></tbody>
                    </table>

                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:addNewCourse('math')">Add Course</button>
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:deleteCourse('math')">Remove Course</button>
                    <p style="font-size: 11px;font-style: italic;display: inline-block">(For every new row,
                        course number, title, grades are required otherwise delete the row.)</p>
                </div>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>List all SCIENCE courses
                        which you have taken </b><br>
                    <span style="font-size: 11px;font-style: italic">(maximum upto 30 courses) </span></p>
                <div class="col-lg-8">
                    <table class="course-table table" id="scienceCourseTable">
                        {{--<thead>--}}
                        {{--<tr>--}}
                        {{--<th style="width: 20%">Course Number</th>--}}
                        {{--<th style="width: 60%">Course Title</th>--}}
                        {{--<th style="width: 20%">Course Grade</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        <tbody id="scienceCourseTableBody"></tbody>
                    </table>

                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:addNewCourse('science')">Add Course</button>
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:deleteCourse('science')">Remove Course</button>
                    <p style="font-size: 11px;font-style: italic;display: inline-block">(For every new row,
                        course number, title, grades are required otherwise delete the row.)</p>
                </div>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>List all Mathematics & Science courses which
                        you are CURRENTLY taking </b><br>
                    <span style="font-size: 11px;font-style: italic">(maximum upto 30 courses) </span></p>
                <div class="col-lg-8">
                    <table class="course-table table" id="currmathscienceCourseTable">
                        {{--<thead>--}}
                        {{--<tr>--}}
                        {{--<th style="width: 20%">Course Number</th>--}}
                        {{--<th style="width: 60%">Course Title</th>--}}
                        {{--<th style="width: 20%">Course Grade</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        <tbody id="currmathscienceCourseTableBody"></tbody>
                    </table>

                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:addNewCourse('currmathscience')">Add Course</button>
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:deleteCourse('currmathscience')">Remove Course</button>
                    <p style="font-size: 11px;font-style: italic;display: inline-block">(For every new row,
                        course number, title, grades are required otherwise delete the row.)</p>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10">
                    <button type="reset" class="btn btn-default btn-sm" style="margin-right: 1em;">Reset</button>
                    {{--<button type="button" class="btn btn-primary btn-sm" style="margin-right: 1em;">Back</button>--}}
                    <button type="submit" class="btn btn-primary btn-sm">Save & Continue</button>
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
@stop

