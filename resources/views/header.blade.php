<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>MTBI Registration</title>
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
            <h3><b>Student Application Form</b></h3>
            <p><small>
                    <b>** Applicants will be notified of acceptance by March 20.</b> However, if you receive an alternative offer and
                    you need earlier notification to help you make a decision, send an email to Ciera Duran (<a href="mailto:crduran@asu.edu">crduran@asu.edu</a>) to
                    alert us of your situation.
                </small></p>
            <hr>

            @yield('content')

            <hr>
            <div class="modal-footer">
                <p style="text-align: center;font-size: 0.8em;font-weight: bold">MTBI / SUMS | Carlos Castillo-Chavez<br>
                    Arizona State University<br>
                    PO BOX 873901 | Tempe | Arizona | 85287-3901<br>
                    <a href="http://mtbi.asu.edu">http://mtbi.asu.edu</a>
                </p>
            </div>
        </div>
        <br>
    </div>
</body>
</html>
