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
        'title','start_date','end_date','user','kids_under_two','kids_under_six','adults','bags','comments'
        <div class="col-md-12 col-md-offset-1">
            <form action="{{ url('schedule/add') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="start_date">Start date</label>
                    <input type="text" class="form-control" id="start_date" name="start_date">
                    <input type="text" class="form-control" id="end_date" name="end_date">
                </div>
                <div class="form-group">
                    <label for="kids_under_two">Crianças (0 - 2 anos)</label>
                    <input type="number" class="form-control" id="kids_under_two" name="kids_under_two">
                </div>
                <div class="form-group">
                    <label for="kids_under_six">Crianças (3 - 6 anos)</label>
                    <input type="number" class="form-control" id="kids_under_six" name="kids_under_six">
                </div>
                <div class="form-group">
                    <label for="adults">Adultos</label>
                    <input type="number" class="form-control" id="adults" name="adults">
                </div>

                <div class="form-group">
                    <label for="bags">Malas</label>
                    <input type="number" class="form-control" id="bags" name="bags">
                </div>
                <div class="form-group">
                    <label for="comments">Observação</label>
                    <div><textarea rows="5" cols="40" class="textarea" id="comments" name="comments"></textarea></div>
                </div>

                <button type="submit" class="btn btn-primary">Reservar</button>
            </form>
{{--            <button id="my-button" type="submit" class="btn btn-primary">Reservar</button>--}}
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