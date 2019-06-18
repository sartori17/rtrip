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
                <div class="card-header">Agenda</div>

                <div class="card-body">
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <div class="col-md-12 col-md-offset-1">

                    </div>

                    <br>
                    <div class="col-md-12 col-md-offset-1 right">
{{--                        <a class="btn btn-dark" href="{{route('schedule.create')}}">Novo agendamento</a>--}}
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