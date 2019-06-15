@extends('layouts.app')

@section('style')
{{--    <link href='{{ url('fullcalendar/packages/core/main.css') }}' rel='stylesheet' />--}}
{{--    <link href='{{ url('fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />--}}
{{--    <link href='{{ url('fullcalendar/packages/list/main.css') }}' rel='stylesheet' />--}}
{{--    <link href='{{ url('fullcalendar/packages/timegrid/main.css') }}' rel='stylesheet' />--}}
    <link href='{{ url('css/jquery.datetimepicker.min.css') }}' rel='stylesheet' />
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>Schedule</h1></div>

                <div class="card-body">
                    <div class="col-md-12 col-md-offset-1">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </div>
                    <br>
                    <form action="{{ url('schedule/add') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="start_date">Start date</label>
                            <input type="text" class="form-control timepicker" id="start_date" name="start_date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End date</label>
                            <input type="text" class="form-control timepicker" id="end_date" name="end_date">
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
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src='{{ url('js/jquery.datetimepicker.full.js') }}'></script>

    <script type="text/javascript">
        $('.timepicker').datetimepicker({
            format: 'Y-m-d H:i',
            minDate: '<?=$minDate?>',
            maxDate: '<?=$maxDate?>',
            allowTimes:[<?=$allowTimeString?>]
        });
    </script>

    {{--    <script src='{{ url('fullcalendar/packages/core/main.js') }}'></script>--}}
{{--    <script src='{{ url('fullcalendar/packages/daygrid/main.js') }}'></script>--}}
{{--    <script src='{{ url('fullcalendar/packages/interaction/main.js') }}'></script>--}}
{{--    <script src='{{ url('fullcalendar/packages/list/main.js') }}'></script>--}}
{{--    <script src='{{ url('fullcalendar/packages/timegrid/main.js') }}'></script>--}}

{{--    --}}
{{--    {!! $calendar->script() !!}--}}
{{--    <script>--}}
{{--        document.getElementById('my-button').addEventListener('click', function() {--}}
{{--            var date = calendar.getDate();--}}
{{--            var date = calendar.start();--}}
{{--            var time = calendar.toString();--}}
{{--            alert("The current date of the calendar is " + date.toISOString());--}}
{{--        });--}}
{{--    </script>--}}

@endsection