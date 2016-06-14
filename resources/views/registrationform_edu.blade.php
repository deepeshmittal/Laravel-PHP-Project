@extends('header')

@section('content')
    <h4 style="margin-bottom: 1em;margin-top:1.5em;text-decoration: underline;">Education Details</h4>
    <form class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label style="padding-top: 0" for="currentCollege" class="col-lg-4 control-label required">
                    University/College/Institution <br>(Current Enrollment)</label>
                <div class="col-lg-6">
                    <input type="text" class="form-control" id="currentCollege"
                           placeholder="University/College/Institution Name" required>
                </div>
            </div>

            <div class="form-group">
                <label for="majorFieldStudy" class="col-lg-3 control-label required">Major Field of Study</label>
                <div class="col-lg-3 text_div">
                    <input type="text" class="form-control" id="majorFieldStudy"
                           placeholder="Major Field of Study" required>
                </div>

                <label for="minorFieldStudy" class="col-lg-3 control-label required">Minor Field of Study</label>
                <div class="col-lg-3 text_div">
                    <input type="text" class="form-control" id="minorFieldStudy"
                           placeholder="Minor Field of Study" required>
                </div>
            </div>

            <div class="form-group">

                <label for="graduationDate" class="col-lg-3 control-label required">
                    Expected Date of Graduation with bachelor's degree (MM/YYYY)</label>
                <div class="col-lg-3">
                    <input type="month" class="form-control" id="graduationDate" required>
                </div>
                <label for="overallGPA" class="col-lg-3 control-label required">
                    Overall Grade Point Average (GPA)</label>
                <div class="col-lg-3">
                    <input type="text" class="form-control" id="overallGPA" required>
                </div>
            </div>

            <div class="form-group">
                <label for="takenGRE" class="col-lg-3 control-label required">Have you taken the GRE?</label>
                <div class="col-lg-3">
                    <select class="form-control" id="takenGRE" name="takenGRE" required
                            onchange="javascript:toggleEnablingGREAttendedDate()">
                        <option value="">Select</option>
                        <option value="y">Yes</option>
                        <option value="n">No</option>
                    </select>
                </div>
                <span id="dateGREDetail" style="display: none">
                    <label for="dateGRE" class="col-lg-3 control-label required">Please specify (MM/YYYY)</label>
                    <div class="col-lg-3 text_div">
                        <input type="month" class="form-control" id="dateGRE" required>
                    </div>
                </span>
            </div>

            <div class="form-group" style="background-color: #e6e6e6; margin-left: 1px;margin-right: 1px;">
                <p style="padding-left: .5em; padding-top: .5em;"><b>List other colleges or
                        universities you have attended, if any:</b></p>
                <label for="birthCity" class="col-lg-2 control-label">City</label>
                <div class="col-lg-2" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="birthCity" placeholder="City">
                </div>
                <label for="birthState" class="col-lg-2 control-label">State</label>
                <div class="col-lg-2" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="birthState" placeholder="State">
                </div>
                <label for="birthCountry" class="col-lg-2 control-label">Country</label>
                <div class="col-lg-2" style="margin-bottom: 20px;">
                    <input type="text" class="form-control" id="birthCountry" placeholder="Country">
                </div>
            </div>

            <div class="form-group" style="background-color: #e6e6e6; margin-left: 1px;margin-right: 1px;">
                <p style="padding-left: .5em; padding-top: .5em;"><b>Current Address / Contact Details</b></p>
                <p style="padding-left: .5em;font-style: oblique; font-size: .8em;">Please note, you will receive mail
                    to this address until at least late May. If you are moving, please indicate a permanent address
                    to send information)</p>
                <label for="currentStreet" class="col-lg-2 control-label required">Street</label>
                <div class="col-lg-6" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="currentStreet" placeholder="Street" required>
                </div>
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                    <label for="currentCity" class="col-lg-2 control-label required" >City</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentCity" placeholder="City" required>
                    </div>
                    <label for="currentState" class="col-lg-2 control-label required">State</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentState" placeholder="State" required>
                    </div>
                    <label for="currentCountry" class="col-lg-2 control-label required">Country</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentCountry" placeholder="Country" required>
                    </div>
                </div>
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                    <label for="currentZip" class="col-lg-2 control-label required" >ZIP/Postal Code</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentZip" placeholder="ZIP/Postal Code" required>
                    </div>
                    <label for="currentHomePhone" class="col-lg-2 control-label required" >Home Phone No</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentHomePhone" placeholder="Home Phone" required>
                    </div>
                    <label for="currentMobilePhone" class="col-lg-2 control-label required" >
                        Office/Mobile No</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentMobilePhone" placeholder="Office/Mobile" required>
                    </div>
                </div>
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                    <label for="emailAddress" class="col-lg-2 control-label required" >Primary Email Address</label>
                    <div class="col-lg-4" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="emailAddress"
                               placeholder="primary Email Address" required>
                    </div>
                    <label for="alternateEmailAddress" class="col-lg-2 control-label" >Alternate Email Address</label>
                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <input type="text" class="form-control" id="alternateEmailAddress"
                               placeholder="Alternate Email Address" required>
                    </div>
                </div>
            </div>

            <div class="form-group" style="background-color: #e6e6e6; margin-left: 1px;margin-right: 1px;">
                <p style="padding-left: .5em; padding-top: .5em;"><b>Permanent Address</b></p>
                <p style="padding-left: .5em;font-style: oblique; font-size: .8em; float: left; margin-top: 3px">
                    Your permanent address is same as your current address mentioned above ?
                </p>
                <div class="col-lg-2 text_div">
                    <select name="addressSameAsAbove" id="addressSameAsAbove"
                            onchange="javascript:enablingPermanentAddressBlock()" required>
                        <option value="">Select</option>
                        <option value="y">Yes</option>
                        <option value="n">No</option>
                    </select>
                </div>
            <span id="permanentAddressBlock" style="display: none">
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                <label for="permanentStreet" class="col-lg-2 control-label required">Street</label>
                <div class="col-lg-6" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="permanentStreet" placeholder="Street" required>
                </div>
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                    <label for="permanentCity" class="col-lg-2 control-label required" >City</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="permanentCity" placeholder="City" required>
                    </div>
                    <label for="permanentState" class="col-lg-2 control-label required">State</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="permanentState" placeholder="State" required>
                    </div>
                    <label for="permanentCountry" class="col-lg-2 control-label required">Country</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="permanentCountry" placeholder="Country" required>
                    </div>
                </div>
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                    <label for="permanentZip" class="col-lg-2 control-label required" >ZIP/Postal Code</label>
                    <div class="col-lg-2" style="margin-bottom: 20px;">
                        <input type="text" class="form-control" id="permanentZip" placeholder="ZIP/Postal Code" required>
                    </div>
                    <label for="permanentHomePhone" class="col-lg-2 control-label required" >Home Phone No</label>
                    <div class="col-lg-2" style="margin-bottom: 20px;">
                        <input type="text" class="form-control" id="permanentHomePhone"
                               placeholder="Home Phone" required>
                    </div>
                </div>
            </div>
            </span>
            </div>

            <div class="form-group">
                <div class="col-lg-10">
                    <button type="reset" class="btn btn-default" style="margin-right: 1em;">Reset</button>
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </div>
        </fieldset>
    </form>
@stop

