<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>MTBI Admin</title>
    <link rel="shortcut icon" href="">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/menu.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/registration.js') }}"></script>
</head>
<body>
<div class="top_banner" style="background:#fff;">
    <a href="https://mtbi.asu.edu/">{{ Html::image('image/asu_logo.png','School of Mathematical and Statistical Sciences',array('width' => 190, 'height' => 70)) }}</a>
</div>
<header style="padding: 10px 0px 10px 20px;background-color:#303436;">
    <div class="inner relative"></div>
    <h4 style="color:white;margin: 0px 0px 0px 0px">Mathematical and Theoretical Biology Institute (MTBI)</h4>
    <div class="clear"></div>
    </div>
</header>
<div class="container" id="main_div">
    <div class="col-md-12">
        <br>
        <h3><b>Application Details</b></h3>
        <hr>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Application Number : {{ $application->id }} | Status : {{$application->status}}</h3>
            </div>
            <div class="panel-body no-padding">
                <table id="application-table">
                    <tbody>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Last or Family Name(s)</td>
                            <td>{{ $application->lastName }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">First Name</td>
                            <td>{{ $application->firstName }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Middle Name</td>
                            <td>@if($application->middleName == '') N/A @else {{ $application->middleName }}@endif</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Nick Name</td>
                            <td>@if($application->nickName == '') N/A @else {{ $application->nickName }}@endif</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Gender</td>
                            <td>{{ $application->gender }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Date of Birth</td>
                            <td>{{ $application->dateOfBirth }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Ethnicity</td>
                            <td>@if($application->ethnicity == 'american_indian') American Indian or Alaska Native
                                @elseif($application->ethnicity == 'asian') Asian or Asian American
                                @elseif($application->ethnicity == 'african_american') Black or African American
                                @elseif($application->ethnicity == 'hispanic') Hispanic or Latino/a or Chicano/a
                                @elseif($application->ethnicity == 'native_hawaiian') Native Hawaiian or other Pacific Islander
                                @elseif($application->ethnicity == 'caucasian') White or Caucasian
                                @elseif($application->ethnicity == 'other') {{$application->otherEthnicity}}
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Is U.S Citizen?</td>
                            <td>{{ $application->isUsCitizen }}</td>
                        </tr>
                        @if($application->isUsCitizen == "n")
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Permanent Resident of US ?</td>
                            <td>{{ $application->isPermanentResident }}</td>
                        </tr>
                        @endif
                        @if($application->isPermanentResident == "y")
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">Alien Resident Number</td>
                                <td>{{ $application->alienResidentNo }}</td>
                            </tr>
                        @endif
                        <tr>
                            <td class="full-row" colspan="2">Place of Birth</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">City</td>
                            <td>{{ $application->birthCity }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">State</td>
                            <td>{{ $application->birthState }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Country</td>
                            <td>{{ $application->birthCountry }}</td>
                        </tr>
                        <tr>
                            <td class="full-row" colspan="2">Current Address / Contact Details</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Street</td>
                            <td>{{ $application->currentStreet }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">City</td>
                            <td>{{ $application->currentCity }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">State</td>
                            <td>{{ $application->currentState }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Country</td>
                            <td>{{ $application->currentCountry }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">ZIP/Postal Code</td>
                            <td>{{ $application->currentZip }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Home Phone No</td>
                            <td>{{ $application->currentHomePhone }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Office/Mobile No</td>
                            <td>{{ $application->currentMobilePhone }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Primary Email Address</td>
                            <td>{{ $application->emailAddress }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Alternate Email Address</td>
                            <td>@if($application->alternateEmailAddress == '') N/A @else {{ $application->alternateEmailAddress }}@endif</td>
                        </tr>
                        <tr>
                            <td class="full-row" colspan="2">Permanent Address</td>
                        </tr>
                        @if($application->addressSameAsAbove == "y")
                            <tr>
                                <td colspan="2">Same as current address mentioned above</td>
                            </tr>
                        @else
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">Street</td>
                                <td>{{ $application->permanentStreet }}</td>
                            </tr>
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">City</td>
                                <td>{{ $application->permanentCity }}</td>
                            </tr>
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">State</td>
                                <td>{{ $application->permanentState }}</td>
                            </tr>
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">Country</td>
                                <td>{{ $application->permanentCountry }}</td>
                            </tr>
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">ZIP/Postal Code</td>
                                <td>{{ $application->permanentZip }}</td>
                            </tr>
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">Home Phone No</td>
                                <td>{{ $application->permanentHomePhone }}</td>
                            </tr>
                        @endif
                        <tr>
                            <td class="full-row" colspan="2">Education Details</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">University/College/Institution
                                (Current Enrollment)</td>
                            <td>{{ $application->currentCollege }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Major Field of Study</td>
                            <td>{{ $application->majorFieldStudy }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Minor Field of Study</td>
                            <td>{{ $application->minorFieldStudy }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Expected Date of Graduation with bachelor's degree (MM/YYYY)</td>
                            <td>{{ $application->currentGraduationDate }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Overall Grade Point Average (GPA)</td>
                            <td>{{ $application->overallGPA }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Has taken the GRE?</td>
                            <td>{{ $application->takenGRE }}</td>
                        </tr>
                        @if($application->takenGRE == "y")
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">GRE Date</td>
                                <td>{{ $application->dateGRE }}</td>
                            </tr>
                        @endif
                        <tr>
                            <td class="full-row" colspan="2">List of all other colleges or universities attended</td>
                        </tr>
                        @if(count($college) <= 0)
                            <tr>
                                <td colspan="2">N/A</td>
                            </tr>
                        @endif
                        @foreach($college as $row)
                            <tr>
                                <td colspan="2">{{$row->detailValue}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="full-row" colspan="2">List of all MATHEMATICS courses taken</td>
                        </tr>
                    </tbody>
                </table>
                <table id="application-table">
                    <tbody>
                        @if(count($math_courses) <= 0)
                            <tr>
                                <td colspan="3">N/A</td>
                            </tr>
                        @else
                            <tr>
                                <th class="active" style="width: 35%">Course #</th>
                                <th class="active" style="width: 40%">Course Title</th>
                                <th class="active" style="width: 25%">Grades</th>
                            </tr>
                        @endif
                        @foreach($math_courses as $row)
                            <tr>
                                <td style="width: 35%">{{$row->courseID}}</td>
                                <td style="width: 40%">{{$row->courseTitle}}</td>
                                <td style="width: 25%">{{$row->courseGrade}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="full-row" colspan="3">List of all SCIENCE courses taken</td>
                        </tr>
                        @if(count($science_courses) <= 0)
                            <tr>
                                <td colspan="3">N/A</td>
                            </tr>
                        @else
                            <tr>
                                <th class="active" style="width: 35%">Course #</th>
                                <th class="active" style="width: 40%">Course Title</th>
                                <th class="active" style="width: 25%">Grades</th>
                            </tr>
                        @endif
                        @foreach($science_courses as $row)
                            <tr>
                                <td style="width: 35%">{{$row->courseID}}</td>
                                <td style="width: 40%">{{$row->courseTitle}}</td>
                                <td style="width: 25%">{{$row->courseGrade}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="full-row" colspan="3">List of all Mathematics & Science courses CURRENTLY taking </td>
                        </tr>
                        @if(count($mathscience_courses) <= 0)
                            <tr>
                                <td colspan="3">N/A</td>
                            </tr>
                        @else
                            <tr>
                                <th class="active" style="width: 35%">Course #</th>
                                <th class="active" style="width: 40%">Course Title</th>
                                <th class="active" style="width: 25%">Grades</th>
                            </tr>
                        @endif
                        @foreach($mathscience_courses as $row)
                            <tr>
                                <td style="width: 35%">{{$row->courseID}}</td>
                                <td style="width: 40%">{{$row->courseTitle}}</td>
                                <td style="width: 25%">{{$row->courseGrade}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="full-row" colspan="3">Attachments : Statement of interest and other files</td>
                        </tr>
                        <tr>
                            <td colspan="3">N/A</td>
                        </tr>
                        <tr>
                            <td class="full-row" colspan="3">List awards, scholarships, or honors</td>
                        </tr>
                        @if(count($award) <= 0)
                            <tr>
                                <td colspan="3">N/A</td>
                            </tr>
                        @endif
                        @foreach($award as $row)
                            <tr>
                                <td colspan="3">{{$row->detailValue}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="full-row" colspan="3">Other summer programs applied</td>
                        </tr>
                        @if(count($program) <= 0)
                            <tr>
                                <td colspan="3">N/A</td>
                            </tr>
                        @endif
                        @foreach($program as $row)
                            <tr>
                                <td colspan="3">{{$row->detailValue}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="full-row" colspan="3">Other Details</td>
                        </tr>
                    </tbody>
                </table>
                <table id="application-table">
                    <tbody>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Recent mathematical or science related experiences or activities</td>
                            <td>@if($application->recentExpAct == '') N/A @else {{ $application->recentExpAct }}@endif</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Participated in MTBI before?</td>
                            <td>{{ $application->prevMTBIPart }}</td>
                        </tr>
                        @if($application->prevMTBIPart == 'y')
                            <tr>
                                <td class="active" style="width: 35%;font-weight: bold">MTBI participation date</td>
                                <td>{{ $application->dateMTBIPart }}</td>
                            </tr>
                        @endif
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">How did student heard about MTBI?</td>
                            <td>{{ $application->hearAboutMTBI }}</td>
                        </tr>
                        <tr>
                            <td class="full-row" colspan="2">Faculty Details</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Title</td>
                            <td>{{ $application->refFacultyTitle }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Name</td>
                            <td>{{ $application->refFacultyName }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Address</td>
                            <td>@if($application->refFacultyAddress == '') N/A @else {{ $application->refFacultyAddress }}@endif</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Email</td>
                            <td>{{ $application->refFacultyEmail }}</td>
                        </tr>
                        <tr>
                            <td class="active" style="width: 35%;font-weight: bold">Phone Number</td>
                            <td>@if($application->refFacultyPhoneNumber == '') N/A @else {{ $application->refFacultyPhoneNumber }}@endif</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12">
            <a href="{{\Illuminate\Support\Facades\URL::previous()}}" class="btn btn-primary btn-sm">Go Back</a>
            {!! Form::open(array('class'=>'form-horizontal','style'=>'float: right','action'=>'AdminView@rejectApplication','onsubmit'=>"return confirm('Do you want to REJECT this application?');")) !!}
            <input type="hidden" name ="application-id" value={{$application->id}}>
            <button class="btn btn-danger btn-sm">Reject</button>
            {!! Form::close() !!}
            {!! Form::open(array('class'=>'form-horizontal','style'=>'float: right;margin-right: 15px;','action'=>'AdminView@approveApplication','onsubmit'=>"return confirm('Do you want to APPROVE this application?');")) !!}
            <input type="hidden" name ="application-id" value={{$application->id}}>
            <button type="submit" class="btn btn-success btn-sm">Approve</button>
            {!! Form::close() !!}
        </div>
        <div class="modal-footer">
            <p style="text-align: center;font-size: 0.8em;font-weight: bold">MTBI / SUMS | Carlos Castillo-Chavez<br>
                Arizona State University<br>
                PO BOX 873901 | Tempe | Arizona | 85287-3901<br>
                <a href="http://mtbi.asu.edu">http://mtbi.asu.edu</a>
            </p>
        </div>
    </div>
</div>
</body>