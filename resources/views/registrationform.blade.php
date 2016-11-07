@extends('header')

@section('content')
    <h4 style="margin-bottom: 1em;margin-top:1.5em;text-decoration: underline;">Personal Information</h4>
    {!! Form::open(array('class'=>'form-horizontal','action'=>'StudentRegistration@submitPageOne','onsubmit'=>"return confirm('Do you really want to submit the form?');")) !!}
        <fieldset>

            <div class="form-group">
                <label for="inputLastName" class="col-lg-2 control-label required">Last/Family Name(s)</label>
                <div class="col-lg-2 text_div">
                    <input type="text" class="form-control" id="inputLastName" name ="lastName"
                           placeholder="Last/Family Name(s)" required>
                </div>
                <label for="inputFirstName" class="col-lg-2 control-label required">First Name</label>
                <div class="col-lg-2 text_div">
                    <input type="text" class="form-control" id="inputFirstName" name="firstName"
                           placeholder="First Name" required>
                </div>
                <label for="inputMiddleName" class="col-lg-2 control-label">Middle Name</label>
                <div class="col-lg-2">
                    <input type="text" class="form-control" id="inputMiddleName"  name="middleName"
                           placeholder="Middle Name">
                </div>
            </div>

            <div class="form-group">

                <label for="inputNickName" class="col-lg-2 control-label">Nick Name</label>
                <div class="col-lg-2 text_div">
                    <input type="text" class="form-control" id="inputNickName" name="nickName"
                           placeholder="Nick Name">
                </div>

                <label for="gender" class="col-lg-2 control-label required">Gender</label>
                <div class="col-lg-2 text_div">
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="">Select</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </div>

                <label for="dateOfBirth" class="col-lg-2 control-label required">Date of Birth</label>
                <div class="col-lg-2">
                    <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth" required>
                </div>
            </div>

            <div class="form-group">
                <label for="ethnicity" class="col-lg-2 control-label required">Ethnicity</label>
                <div class="col-lg-2">
                    <select class="form-control" id="ethnicity" name="ethnicity" required
                            onchange="javascrit:toggleEnablingOtherEthnicity()">
                        <option value="">Select</option>
                        <option value="american_indian">American Indian or Alaska Native</option>
                        <option value="asian">Asian or Asian American</option>
                        <option value="african_american">Black or African American</option>
                        <option value="hispanic">Hispanic or Latino/a or Chicano/a </option>
                        <option value="native_hawaiian">Native Hawaiian or other Pacific Islander</option>
                        <option value="caucasian">White or Caucasian</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <span id='other_ethnicity_detail' style='display:none'>
                    <label for="other_ethnicity" class="col-lg-2 control-label required">Please specify other ethnicity</label>
                    <div class="col-lg-2">
                        <input class="form-control" id="other-ethnicity" name="otherEthnicity" required>
                    </div>
                </span>
            </div>

            <div class="form-group">

                <label for="is_us_citizen" class="col-lg-2 control-label required">Are you a US Citizen?</label>
                <div class="col-lg-2">
                    <select class="form-control" id="is_us_citizen" name="isUsCitizen" required
                            onchange="javascript:onChangeIsUSCitizen()">
                        <option value="">Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <span id='permanent_resident_question' style='display:none'>
                    <label for="is_permanent_resident" class="col-lg-6 control-label required">If not a U.S Citizen,
                        are you a Permanent Resident of the United States?</label>
                    <div class="col-lg-2 text_div">
                        <select class="form-control" name="isPermanentResident" id="is_permanent_resident"
                                onchange="javascript:toggleEnablingAlienResidentNo()" required>
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <span id='alien_resident_detail' style='display:none'>
                        <label for="alien_resident_no" class="col-lg-2 control-label required">
                            Alien Resident Number</label>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" name="alienResidentNo"
                                   id="alien_resident_no" maxlength="9" required>
                        </div>
                    </span>
                </span>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>Place of Birth</b></p>
                <label for="birthCity" class="col-lg-2 control-label">City</label>
                <div class="col-lg-2" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="birthCity" name="birthCity"
                           placeholder="City">
                </div>
                <label for="birthState" class="col-lg-2 control-label">State</label>
                <div class="col-lg-2" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="birthState" name="birthState"
                           placeholder="State">
                </div>
                <label for="birthCountry" class="col-lg-2 control-label">Country</label>
                <div class="col-lg-2" style="margin-bottom: 20px;">
                    <input type="text" class="form-control" id="birthCountry" name="birthCountry"
                           placeholder="Country">
                </div>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>Current Address / Contact Details</b><br>
                <span style="font-style: oblique; font-size: .8em;">Please note, you will receive mail
                    to this address until at least late May. If you are moving, please indicate a permanent address
                    to send information)</span></p>
                <label for="currentStreet" class="col-lg-2 control-label required">Street</label>
                <div class="col-lg-6" style="margin-bottom: 5px;">
                    <input type="text" class="form-control" id="currentStreet" name="currentStreet"
                           placeholder="Street" required>
                </div>
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                    <label for="currentCity" class="col-lg-2 control-label required" >City</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentCity" name="currentCity"
                               placeholder="City" required>
                    </div>
                    <label for="currentState" class="col-lg-2 control-label required">State</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentState" name="currentState"
                               placeholder="State" required>
                    </div>
                    <label for="currentCountry" class="col-lg-2 control-label required">Country</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentCountry" name="currentCountry"
                               placeholder="Country" required>
                    </div>
                </div>
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                    <label for="currentZip" class="col-lg-2 control-label required" >ZIP/Postal Code</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentZip" name="currentZip"
                               placeholder="ZIP/Postal Code" required>
                    </div>
                    <label for="currentHomePhone" class="col-lg-2 control-label required" >Home Phone No</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentHomePhone" name="currentHomePhone"
                               placeholder="Home Phone" required>
                    </div>
                    <label for="currentMobilePhone" class="col-lg-2 control-label required" >
                        Office/Mobile No</label>
                    <div class="col-lg-2" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="currentMobilePhone" name="currentMobilePhone"
                               placeholder="Office/Mobile" required>
                    </div>
                </div>
                <div class="col-lg-12" style="padding: 0 0 0 0;">
                    <label for="emailAddress" class="col-lg-2 control-label required" >Primary Email Address</label>
                    <div class="col-lg-4" style="margin-bottom: 5px;">
                        <input type="text" class="form-control" id="emailAddress" name="emailAddress"
                               placeholder="primary Email Address" required>
                    </div>
                    <label for="alternateEmailAddress" class="col-lg-2 control-label" >Alternate Email Address</label>
                    <div class="col-lg-4" style="margin-bottom: 20px;">
                        <input type="text" class="form-control" id="alternateEmailAddress" name="alternateEmailAddress"
                               placeholder="Alternate Email Address">
                    </div>
                </div>
            </div>

            <div class="form-group" id="field-group">
                <p id="box-heading"><b>Permanent Address</b></p>
                <p id="box-heading" style="font-style: oblique; font-size: .8em; float: left; padding-top: 3px">Your
                    permanent address is same as your current address mentioned above ?
                </p>
                <div class="col-lg-1 text_div">
                    <select name="addressSameAsAbove" id="addressSameAsAbove"
                            onchange="javascript:enablingPermanentAddressBlock()" required>
                        <option value="">Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <span id="permanentAddressBlock" style="display: none">
                    <div class="col-lg-12" style="padding: 0 0 0 0;">
                        <label for="permanentStreet" class="col-lg-2 control-label required">Street</label>
                        <div class="col-lg-6" style="margin-bottom: 5px;">
                            <input type="text" class="form-control" id="permanentStreet" name="permanentStreet"
                                   placeholder="Street" required>
                        </div>
                        <div class="col-lg-12" style="padding: 0 0 0 0;">
                            <label for="permanentCity" class="col-lg-2 control-label required" >City</label>
                            <div class="col-lg-2" style="margin-bottom: 5px;">
                                <input type="text" class="form-control" id="permanentCity" name="permanentCity"
                                       placeholder="City" required>
                            </div>
                            <label for="permanentState" class="col-lg-2 control-label required">State</label>
                            <div class="col-lg-2" style="margin-bottom: 5px;">
                                <input type="text" class="form-control" id="permanentState" name="permanentState"
                                       placeholder="State" required>
                            </div>
                            <label for="permanentCountry" class="col-lg-2 control-label required">Country</label>
                            <div class="col-lg-2" style="margin-bottom: 5px;">
                                <input type="text" class="form-control" id="permanentCountry" name="permanentCountry"
                                       placeholder="Country" required>
                            </div>
                        </div>
                        <div class="col-lg-12" style="padding: 0 0 0 0;">
                            <label for="permanentZip" class="col-lg-2 control-label required" >ZIP/Postal Code</label>
                            <div class="col-lg-2" style="margin-bottom: 5px;">
                                <input type="text" class="form-control" id="permanentZip" name="permanentZip"
                                       placeholder="ZIP/Postal Code" required>
                            </div>
                            <label for="permanentHomePhone" class="col-lg-2 control-label required" >Home Phone No</label>
                            <div class="col-lg-2" style="margin-bottom: 20px;">
                                <input type="text" class="form-control" id="permanentHomePhone" name="permanentHomePhone"
                                       placeholder="Home Phone" required>
                            </div>
                        </div>
                    </div>
                </span>
            </div>

            <div class="form-group">
                <div class="col-lg-12">
                    <button type="reset" class="btn btn-default btn-sm" style="margin-right: 1em;">Reset</button>
                    <button type="submit" class="btn btn-primary btn-sm">Save & Continue</button>
                    <a style="float:right;" href="https://mtbi.asu.edu/" class="btn btn-warning btn-sm">MTBI Home</a>
                </div>
            </div>
        </fieldset>
    {!! Form::close() !!}
@stop

