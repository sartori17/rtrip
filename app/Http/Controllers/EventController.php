<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Event::all();

        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    false,
                    new \DateTime($value->start_date . ' 08:00:00') ,
                    new \DateTime($value->end_date. ' 08:30:00'.'') ,
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'pass here url and any route',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('fullcalender', compact('calendar'));

//        return view('schedule.start', compact('calendar'));
    }


    public function index2()
    {
        $events = [];
        $data = Event::all();

        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'pass here url and any route',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('fullcalendar', compact('calendar'));

    }
}

/*
 * $calendar = Calendar::addEvents($e)->setCallbacks([
      'themeSystem' => '"bootstrap4"',
      'eventRender' => 'function(event, element) {
        element.popover({
          animation: true,
          html: true,
          content: $(element).html(),
          trigger: "hover"
          });
        }'
      ]);*/