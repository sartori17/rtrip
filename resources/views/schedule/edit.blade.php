@extends('layouts.app')

@section('style')
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
                    <form action="{{ route('schedule.update', ['id'=>$id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="start_date">Start date</label>
                            <input type="text" class="form-control timepicker" id="start_date" name="start_date" value="{{$data->start_date}}">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End date</label>
                            <input type="text" class="form-control timepicker" id="end_date" name="end_date" value="{{$data->end_date}}">
                        </div>
                        <div class="form-group">
                            <label for="kids_under_two">Crianças (0 - 2 anos)</label>
                            <input type="number" class="form-control" id="kids_under_two" name="kids_under_two" value="{{$data->kids_under_two}}">
                        </div>
                        <div class="form-group">
                            <label for="kids_under_six">Crianças (3 - 6 anos)</label>
                            <input type="number" class="form-control" id="kids_under_six" name="kids_under_six" value="{{$data->kids_under_six}}">
                        </div>
                        <div class="form-group">
                            <label for="adults">Adultos</label>
                            <input type="number" class="form-control" id="adults" name="adults" value="{{$data->adults}}">
                        </div>

                        <div class="form-group">
                            <label for="bags">Malas</label>
                            <input type="number" class="form-control" id="bags" name="bags" value="{{$data->bags}}">
                        </div>
                        <div class="form-group">
                            <label for="comments">Observação</label>
                            <div><textarea rows="5" cols="40" class="textarea" id="comments" name="comments" >{{$data->comments}}</textarea></div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">save</button>
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