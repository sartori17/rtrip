@extends('layouts.app')

@section('style')
    <link href='{{ url('fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
    <link href='{{ url('fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />
    <link href='{{ url('fullcalendar/packages/list/main.css') }}' rel='stylesheet' />
    <link href='{{ url('fullcalendar/packages/timegrid/main.css') }}' rel='stylesheet' />
@endsection

@section('content')
    <div class="row" style="background-color: white;">
        <div class="col-md-12 ">
            <h3>Schedule</h3>
            <hr>
        </div>
        <div class="col-md-6 ">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
        </div>
        <div class="col-md-4 col-md-offset-1">
            <form action="/action_page.php" method="post">
                <div class="form-group">
                    <label for="email">Crianças (0 - 3 anos)</label>
                    <input type="number" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Crianças (2 - 6 anos)</label>
                    <input type="number" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Adultos</label>
                    <input type="number" class="form-control" id="pwd">
                </div>

                <div class="form-group">
                    <label for="pwd">Malas</label>
                    <input type="number" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Observação</label>
                    <div><textarea rows="5" cols="40" class="textarea" id="pwd"></textarea></div>
                </div>

                <button type="submit" class="btn btn-primary">Reservar</button>
            </form>
            <button id="my-button" type="submit" class="btn btn-primary">Reservar</button>
        </div>
    </div>
@endsection

@section('script')
    <script src='{{ url('fullcalendar/packages/core/main.js') }}'></script>
    <script src='{{ url('fullcalendar/packages/daygrid/main.js') }}'></script>
    <script src='{{ url('fullcalendar/packages/interaction/main.js') }}'></script>
    <script src='{{ url('fullcalendar/packages/list/main.js') }}'></script>
    <script src='{{ url('fullcalendar/packages/timegrid/main.js') }}'></script>
    {!! $calendar->script() !!}
    <script>
        document.getElementById('my-button').addEventListener('click', function() {
            var date = calendar.getDate();
            var date = calendar.start();
            var time = calendar.toString();
            alert("The current date of the calendar is " + date.toISOString());
        });

    </script>

@endsection