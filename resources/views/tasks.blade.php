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
    <title>Daily Task App - Tasks </title>
</head>
<body>

{{--    Navbar--}}
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <a class="navbar-brand mx-3 fs-2 fw-bold text-white title" href="/tasks"> Daily Task App </a>
</nav>
<div class="container-fluid col-12 text-center">
    <div>
        <p class="fs-2 mt-5 mb-4 fw-bold"> Add Task</p>
    </div>

    <form action="/saveTask" method="post">
        {{@csrf_field()}}
        <div class="form-group col-lg-6 offset-lg-3 mb-5">
            <input type="text" class="form-control shadow-none" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter your task here" name="task">
            @foreach($errors->all() as $error)
                <div class="text-danger text-start">
                    {{$error}}
                </div>
            @endforeach
        </div>

        <div class="row col-lg-4 offset-lg-4 col-10 offset-1 mt-3 mb-5">
            <button class="btn btn-danger col-6 col-lg-5 mx-auto fw-bold" type="submit"> Save Task</button>
            <button class="btn btn-secondary col-6 col-lg-5 mx-auto fw-bold" type="button" onclick="Clear();"> Clear</button>
        </div>
    </form>



</div>
<hr>
<div class="col-lg-10 offset-lg-1 ">
    <table class="table">
        <thead class="text-center">
        <tr>
            <th scope="col"></th>
            <th scope="col">Task</th>
            <th scope="col">Created Date</th>
            <th scope="col">Last Updated Date</th>
            <th scope="col">Status</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>

        @foreach($tasks as $task)
            <tr class="text-center">
                <td scope="row">{{$task->id}}</td>
                <td>{{$task->task}}</td>
                <td>{{$task->created_at->format('Y-m-d')}}</td>
                <td>{{$task->updated_at->format('Y-m-d')}}</td>
                <td>
                    @if($task->isCompleted)
                        <button class="btn btn-success btn-sm disabled fw-bold"
                                style="cursor: default;font-size: 14px;"> Completed
                        </button>
                    @else
                        <button class="btn btn-danger btn-sm disabled fw-bold" style="cursor: default;font-size: 14px;">
                            Not Completed
                        </button>
                    @endif
                </td>
                <td>
                    @if($task->isCompleted)
                        <a href="/markAsNotCompleted/{{$task->id}}"  class="text-decoration-none">
                            <button class="btn btn-danger btn-sm mb-1 mb-lg-0" style="font-size: 14px"> Mark as Not Completed
                            </button>
                        </a>
                    @else
                        <a href="/markAsCompleted/{{$task->id}}"  class="text-decoration-none">
                            <button class="btn btn-success btn-sm mb-1 mb-lg-0" style="font-size: 14px"> Mark as Completed</button>
                        </a>
                    @endif
                    <a href="/delete/{{$task->id}}" class="text-decoration-none">
                        <button class="btn btn-danger btn-sm deleteBtn" style="font-size: 14px"> Delete</button>
                    </a>
                    <a href="/update/{{$task->id}}" class="text-decoration-none">
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas"
                                style="font-size: 14px"
                                data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            Update
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

</div>
<script type="text/javascript" src="{{ URL::asset('js/script.js') }}"></script>
</body>
</html>
