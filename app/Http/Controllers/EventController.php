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
            'timeZone' => 'America/Sao_Paulo',
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
                switch ($value->status) {
                    case 0:
                        $color = "#292b2c";
                        break;
                    case 1:
                        $color = "#5cb85c";
                        break;
                    case 2:
                        $color = "#d9534f";
                        break;
                    case 4:
                        $color = "#f0ad4e";
                        break;
                    default:
                        $color = "#292b2c";
                }
                $events[] = Calendar::event(
                    $value->title,
                    false,
                    new \DateTime($value->start_date ) ,
                    new \DateTime($value->end_date) ,
                    null,
                    // Add color and link on event
                    [
                        'color' => $color,
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