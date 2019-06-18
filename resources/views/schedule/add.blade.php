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
                <div class="card-header">Agendamento</div>

                <div class="card-body">
                    <div class="col-md-12 col-md-offset-1">

                    </div>
                    <br>
                    <form action="{{ route('schedule.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <h4>{{$title}}</h4>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col col-md-3">
                                <div class="form-group">
                                    <label class="text-dark" for="start_date">Data</label>
                                    <input type="text" class="form-control timepicker" id="start_date" name="start_date" readOnly>
                                </div>
                            </div>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="end_date">End date</label>--}}
{{--                            <input type="text" class="form-control timepicker" id="end_date" name="end_date">--}}
{{--                        </div>--}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-dark" for="kids_under_two">Crianças (0 - 2 anos)</label>
                                    <input type="number" min="0" class="form-control" id="kids_under_two" name="kids_under_two">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-dark" for="kids_under_six">Crianças (3 - 6 anos)</label>
                                    <input type="number" min="0" class="form-control" id="kids_under_six" name="kids_under_six">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-dark" for="adults">Adultos</label>
                                    <input type="number" min="0" class="form-control" id="adults" name="adults">
                                </div>
                            </div>
                            <div class="col">

                                <div class="form-group">
                                    <label class="text-dark" for="bags">Malas</label>
                                    <input type="number" min="0" class="form-control" id="bags" name="bags">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="comments">Observações</label>
                            <textarea rows="5" cols="40" class="form-control" id="comments" name="comments"></textarea>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-dark">Agendar</button>
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