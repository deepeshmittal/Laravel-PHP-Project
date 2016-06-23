@extends('header')

@section('content')
    <h4 style="margin-bottom: 1em;margin-top:1.5em;text-decoration: underline;">Other Details & Declaration</h4>
    {!! Form::open(array('class'=>'form-horizontal')) !!}
        <fieldset>
            <div class="form-group" id="field-group">
                <p id="box-heading"><b>Attach statement of interest
                        and other files</b> <br><span style="font-size: 11px;font-style: italic">
                        (Maximum file size allowed: <b>5MB</b>)</span></p>
                <div class="col-lg-12" style="margin-bottom: 15px;">
                    <input type="file" class="form-control" id="attachFile1">
                </div>

                <div class="col-lg-12" style="margin-bottom: 15px;">
                    <input type="file" class="form-control" id="attachFile2">
                </div>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>Please list two recent mathematical
                        or science related experiences or activities that you have had:</b></p>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <textarea class="form-control cust-textArea"  rows="3" id="expandact"
                              placeholder="Please write here.."></textarea>
                </div>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>List awards, scholarships, or honors you have
                        received during your time as an undergraduate student, if any</b><br>
                    <span style="font-size: 11px;font-style: italic">(maximum upto 5 awards)</span></p>
                <div class="col-lg-6">
                    <table class="table" id="AwardTable">
                        <tbody id="AwardTableBody"></tbody>
                    </table>
                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:addRowTable('Award')">Add Award</button>
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:removeRowTable('Award')">Remove Award</button>
                    <p style="font-size: 11px;font-style: italic;display: inline-block">(For every new row,
                        award details are required otherwise delete the row.)</p>
                </div>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>What other summer
                        programs have you applied to, if any</b><br>
                    <span style="font-size: 11px;font-style: italic">(maximum upto 5 programs)</span></p>
                <div class="col-lg-6">
                    <table class="table" id="ProgramTable">
                        <tbody id="ProgramTableBody"></tbody>
                    </table>
                </div>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:addRowTable('Program')">Add Program</button>
                    <button type='button' class='btn btn-primary btn-xs'
                            onclick="javascript:removeRowTable('Program')">Remove Program</button>
                    <p style="font-size: 11px;font-style: italic;display: inline-block">(For every new row,
                        program details are required otherwise delete the row.)</p>
                </div>
            </div>

            <div class="form-group" id="field-group">
                <label for="prevMTBIPart" class="col-lg-3 control-label required" style="text-align: left">Have you
                    participated in MTBI before?</label>
                <div class="col-lg-3" style="margin-bottom: 15px">
                    <select class="form-control" id="prevMTBIPart" name="prevMTBIPart" required
                            onchange="javascript:enablingMTBIAttendedDate()">
                        <option value="">Select</option>
                        <option value="y">Yes</option>
                        <option value="n">No</option>
                    </select>
                </div>
                <span id="dateMTBIPart" style="display: none">
                    <label for="dateMTBIPart" class="col-lg-3 control-label required">Please specify (MM/YYYY)</label>
                    <div class="col-lg-3" style="margin-bottom: 15px">
                        <input type="month" class="form-control" id="dateGRE" required>
                    </div>
                </span>
            </div>

            <div class="form-group" id="field-group">
                <label for="MTBIRef" class="col-lg-12 control-label required" style="text-align: left">
                    How did you hear about MTBI? Please be specific
                    (include contact email address if faculty member or advisor)</label><br><br>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <textarea class="form-control cust-textArea"  rows="3" id="MTBIRef"
                              placeholder="Please write here.."></textarea>
                </div>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>Please indicate the NAME of the faculty completing your reference form</b></p>
                <label for="refName" class="col-lg-2 control-label required">Name</label>
                <div class="col-lg-2" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="refName" placeholder="Name" required>
                </div>
                <label for="refTitle" class="col-lg-2 control-label required">Title</label>
                <div class="col-lg-2" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="refTitle" placeholder="Title" required>
                </div>
                <label for="refAddress" class="col-lg-2 control-label">Address</label>
                <div class="col-lg-2" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="refAddress" placeholder="Address">
                </div>
                <label for="refEmail" class="col-lg-2 control-label required">Email</label>
                <div class="col-lg-2" style="margin-bottom: 20px;">
                    <input type="email" class="form-control" id="refEmail" placeholder="Email" required>
                </div>
                <label for="refPhoneNumber" class="col-lg-2 control-label">Phone Number</label>
                <div class="col-lg-2" style="margin-bottom: 20px;">
                    <input type="text" class="form-control" id="refPhoneNumber" placeholder="Phone Number">
                </div>
            </div>

            <div class="form-group" id="field-group">
                <label for="programCommit" class="col-lg-12 control-label required" style="text-align: left;
                padding-top: .5em;"><b>Program Commitment</b></label><br><br>
                <div class="col-lg-12" style="margin-bottom: 15px">
                    <p>I certify that all parts of this application packet are complete and accurate to the
                        best of my knowledge, and I understand that submission of inaccurate information
                        may be sufficient for denial of admission or termination of enrollment.</p>
                    <p>Upon acceptance into the MTBI Summer Program, I will fully participate in all program
                        activities and work full-time throughout the entire session from date of my arrival
                        until the end of the program. Failure to do so may be sufficient cause for MTBI
                        to forfeit payment of my stipend or terminate my participation in the
                        program.</p>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" id="commit-check" required><span style="font-style: italic"><b>Yes I fully
                                    understand and am in agreement with the above terms</b></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10">
                    <button type="reset" class="btn btn-default btn-sm" style="margin-right: 1em;">Reset</button>
                    <button type="button" class="btn btn-primary btn-sm" style="margin-right: 1em;">Back</button>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
@stop

