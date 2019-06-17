<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use Auth;
use App\Event;

class EventController extends Controller
{
    public function index()
    {

        $options = [
            'plugins' => ['dayGrid', 'timeGrid', 'list', 'interaction'],
            'defaultView' => 'dayGridMonth',
            'header' => [
                'left' => 'title',
                'center' => 'dayGridMonth,  timeGridWeek',
                'right' => 'prev,next',
            ],

            'navLinks' => 'true',
            'selectable' => 'true',
            'selectMirror' => 'true',
            'editable' => 'true',
            'eventLimit' => 'true'
        ];
//        $options = ['plugins' => 'interaction', 'dayGrid', 'timeGrid', 'list'];
        $events = [];
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            $data = Event::all();
        } else {
            $data = Event::where(['user'=> $user->id])->get();

        }

        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    false,
                    new \DateTime($value->start_date ) ,
                    new \DateTime($value->end_date) ,
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => route('schedule.show', ['id' => $value->id]),
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        $calendar->setOptions($options);
        $calendar->setId('add');
        return view('events.list', compact('calendar'));
    }

}