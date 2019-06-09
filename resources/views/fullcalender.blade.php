@extends('layouts.admin')

@section('style')
    <link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/interaction/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/list/main.css' rel='stylesheet' />
    <link href='fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
@endsection

@section('content')

        <div class="row" style="border: 1px solid lightgray; margin-top: -37px; padding-top: 40px; background-color: white;">
            <div class="col-md-6 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Calendar</div>

                    <div class="panel-body">
                        {!! $calendar->calendar() !!}
                    </div>

                </div>
            </div>
            <div class="col-md-4 col-md-offset-1">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="email">Crianças (0 - 2 anos)</label>
                        <input type="number" class="form-control" id="email">
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
            </div>

        </div>

@endsection

@section('script')
    <script src='fullcalendar/packages/core/main.js'></script>
    <script src='fullcalendar/packages/daygrid/main.js'></script>
    <script src='fullcalendar/packages/interaction/main.js'></script>
    <script src='fullcalendar/packages/list/main.js'></script>
    <script src='fullcalendar/packages/timegrid/main.js'></script>
    {!! $calendar->script() !!}
@endsection