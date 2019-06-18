@extends('layouts.app')

@section('style')

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
                    @csrf
                    <div class="form-group">
                        <h4>{{$data->title}}</h4>
                    </div>
                    <hr>
                    <div class="form-group ">
                        <label class="text-dark" for="start_date">Data</label>
                        <input type="text" class="form-control-plaintext timepicker" id="start_date" name="start_date" value="{{$data->start_date}}" readOnly>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <label for="end_date">End date</label>--}}
{{--                        <input type="text" class="form-control timepicker" id="end_date" name="end_date" value="{{$data->end_date}}">--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label class="text-dark" for="kids_under_two">Crianças (0 - 2 anos)</label>
                                <input type="text" class="form-control-plaintext" id="kids_under_two" name="kids_under_two" value="{{$data->kids_under_two}}" readOnly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="text-dark" for="kids_under_six">Crianças (3 - 6 anos)</label>
                                <input type="text" class="form-control-plaintext" id="kids_under_six" name="kids_under_six" value="{{$data->kids_under_six}}" readOnly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="text-dark" for="adults">Adultos</label>
                                <input type="text" class="form-control-plaintext" id="adults" name="adults" value="{{$data->adults}}" readOnly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="text-dark" for="bags">Malas</label>
                                <input type="text" class="form-control-plaintext" id="bags" name="bags" value="{{$data->bags}}" readOnly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="text-dark" for="comments">Observações</label>
                        <div>{{$data->comments}}</div>
                    </div>
                    <div></div>
                    @role('admin')
                    <div class="row justify-content-center">
                        <a class="btn btn-dark" href="{{route('schedule.edit', ['id' => $id])}}">editar</a>
                    </div>
                    @endrole
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection