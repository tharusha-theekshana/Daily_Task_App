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
    <title>Daily Task App - Update Task </title>
</head>
<body>

{{--    Navbar--}}
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <a class="navbar-brand mx-3 fs-2 fw-bold text-white" href="/tasks"> Daily Task App </a>
</nav>
<div class="container-fluid col-12 text-center">
    <div>
        <p class="fs-2 mt-5 mb-4 fw-bold"> Update Task</p>
    </div>

    <form action="/updateTask" method="post">
        {{@csrf_field()}}
        <div class="form-group col-lg-6 offset-lg-3 mb-5">
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter your task here" name="task" value="{{$tasksdata->task}}">
            <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter your task here" name="id" value="{{$tasksdata->id}}">
            @foreach($errors->all() as $error)
                <div class="text-danger text-start">
                    {{$error}}
                </div>
            @endforeach
        </div>

        <div class="row col-lg-4 offset-lg-4 col-10 offset-1 mt-3 mb-5">
            <button class="btn btn-danger col-6 col-lg-5 mx-auto fw-bold" type="submit"> Update Task</button>
            <button class="btn btn-secondary col-6 col-lg-5 mx-auto fw-bold" type="button" onclick="Clear();"> Clear</button>
        </div>
    </form>

</div>
<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>
