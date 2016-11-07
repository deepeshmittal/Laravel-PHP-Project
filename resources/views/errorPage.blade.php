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
        <br>
        <div class="alert alert-dismissible alert-warning" style="margin-top:30px;">
            <strong>Oh snap!</strong> Something is wrong !! Please start your registration again using below link:<br>
            <a href="http://ganga.la.asu.edu/mtbiregistration/register">Click Here</a>
        </div>
        <hr>
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