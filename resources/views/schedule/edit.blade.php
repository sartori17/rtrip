@extends('layouts.app')

@section('style')
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

                    <form action="{{ route('schedule.update', ['id'=>$id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <h4>{{$data->title}}</h4><hr>
                        </div>

                        <div class="form-group ">
                            <label class="text-dark" for="start_date">Status</label>
                            @if($data->status == 0)
                                <h4><span class="badge badge-secondary">Solicitado</span></h4>
                            @endif
                            @if($data->status == 1)
                                <h4><span class="badge badge-success">Confirmado</span></h4>
                            @endif
                            @if($data->status == 2)
                                <h4><span class="badge badge-danger">Cancelado</span></h4>
                            @endif
                            @if($data->status == 4)
                                <h4><span class="badge badge-warning">Cancelado pelo cliente</span></h4>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col col-md-3">
                                <div class="form-group">
                                    <label class="text-dark" for="start_date">Data</label>
                                    <input type="text" class="form-control timepicker" id="start_date" name="start_date" value="{{$data->start_date}}" readOnly>
                                </div>
                            </div>
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label for="end_date">End date</label>--}}
{{--                            <input type="text" class="form-control timepicker" id="end_date" name="end_date" value="{{$data->end_date}}">--}}
{{--                        </div>--}}
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-dark" for="kids_under_two">Crianças (0 - 2 anos)</label>
                                    <input type="number" min="0" class="form-control" id="kids_under_two" name="kids_under_two" value="{{$data->kids_under_two}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-dark" for="kids_under_six">Crianças (3 - 6 anos)</label>
                                    <input type="number" min="0" class="form-control" id="kids_under_six" name="kids_under_six" value="{{$data->kids_under_six}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-dark" for="adults">Adultos</label>
                                    <input type="number" min="0" class="form-control" id="adults" name="adults" value="{{$data->adults}}">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label class="text-dark" for="bags">Malas</label>
                                    <input type="number" min="0" class="form-control" id="bags" name="bags" value="{{$data->bags}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="comments">Observações</label>
                            <textarea rows="5" cols="40" class="form-control" id="comments" name="comments" >{{$data->comments}}</textarea>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-dark">Salvar</button>
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
@endsection