<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>Daily Task App </title>
</head>
<body>
<div class="d-flex flex-column align-items-center justify-content-center vh-100">
    <img src="{{ URL::asset('images/task_image.jpg') }}" class="col-lg-2 col-6">
    <p class="home-title mt-5 mb-4"> Daily Task App </p>
    <a href="/tasks"><button class="btn btn-danger">&nbsp; Go to Tasks &nbsp;-> &nbsp;</button></a>
</div>

<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>
