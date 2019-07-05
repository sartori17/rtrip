<html>
<body>
<h4>Olá {{ $event->title }}!</h4>
<hr>
<p>AGENDAMENTO CONFIRMADO!</p>
<p>Data: {{$event->start_date}}</p>
<p>Crianças (0 - 2 anos): {{$event->kids_under_two}}</p>
<p>Crianças (3 - 6 anos): {{$event->kids_under_six}}</p>
<p>Adultos: {{$event->adults}}</p>
<p>Malas: {{$event->bags}}</p>
<p>Observações: </p>
<p>{{$event->comments}}</p>
<p>Att, <br>
    RoadTrip!</p>
</body>
</html>