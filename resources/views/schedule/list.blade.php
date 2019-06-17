@extends('layouts.app')

@section('style')
    <link href='{{ url('fullcalendar/packages/core/main.css') }}' rel='stylesheet' />
    <link href='{{ url('fullcalendar/packages/daygrid/main.css') }}' rel='stylesheet' />
    <link href='{{ url('fullcalendar/packages/list/main.css') }}' rel='stylesheet' />
    <link href='{{ url('fullcalendar/packages/timegrid/main.css') }}' rel='stylesheet' />
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
                    <div class="col-md-12 col-md-offset-1 right">
                        <a class="btn btn-dark" href="{{route('schedule.create')}}">new schedule</a>
                    </div>
                    <br>
                    {!! $calendar->calendar() !!}
                </div>
            </div>
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
@endsection