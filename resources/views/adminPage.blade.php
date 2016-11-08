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
    <script>
        function changeApplicationYear(){
            var year = $('#application-year').val();
            if(year == ""){
                var route = "{{route('review.application')}}";
            }else {
                var route = "{{route('review.application',['year' => 'year-param'])}}";
                route = route.replace("year-param", year);
            }
            window.location.href = route;
        }
    </script>

</head>
<body>
<div class="top_banner" style="background:#fff;">
    <a href="http://www.asu.edu/">{{ Html::image('image/asu_logo.png','School of Mathematical and Statistical Sciences',array('width' => 190, 'height' => 70)) }}</a>
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
        <div class="col-md-12">
            <a style="float:right;" href="https://mtbi.asu.edu/" class="btn btn-warning btn-sm">MTBI Home</a>
        </div>
        <h3><b>Application Review Page</b></h3>
        <hr>
        <div class="col-lg-3" style="float: right">
            <select class="form-control" id="application-year" onchange="changeApplicationYear()">
                <option value="">Select Year</option>
                @foreach($app_term as $term)
                    @if($term['application_term'] == $dropdown_value)
                    <option value="{{ $term['application_term'] }}" selected>{{ $term['application_term'] }}</option>
                    @else
                        <option value="{{ $term['application_term'] }}">{{ $term['application_term'] }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <br><br>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Applications</h3>
            </div>
            <div class="panel-body no-padding">
                <table id="application-table">
                    <thead>
                        <tr>
                            <th style="width: 25%">Application Number</th>
                            <th style="width: 25%">Name</th>
                            <th style="width: 25%">Submitted On</th>
                            <th style="width: 25%">Application Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($application as $app)
                            <tr>
                                <td style="text-align: center"><a href="/mtbiregistration/admin/application-details/id={{ $app->id }}">{{ $app->id }}</a></td>
                                <td>{{ $app->firstName }} {{ $app->middleName }} {{ $app->lastName }}</td>
                                <td>{{ $app->created_at }}</td>
                                <td style="text-align: center">@if ($app->status == "pending") <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                    @elseif($app->status == "approved") <i class="fa fa-check" aria-hidden="true"></i>
                                    @elseif($app->status == "rejected") <i class="fa fa-times" aria-hidden="true"></i>
                                    @endif</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
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