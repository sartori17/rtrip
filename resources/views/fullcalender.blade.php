@extends('layouts.appnew')

@section('style')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

@endsection

@section('content')
    <div class="container">
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
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js" ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js" ></script>

    {!! $calendar->script() !!}
@endsection