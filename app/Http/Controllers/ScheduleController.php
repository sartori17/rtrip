<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use Auth;
use App\Event;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            $data = Event::all();
        } else {
            $data = Event::where(['user'=> $user->id])->get();
        }

        $options = [
            'plugins' => ['dayGrid', 'timeGrid', 'list', 'interaction'],
            'defaultView' => 'list',
            'header' => [
                'left' => 'title',
                'center' => '',
                'right' => 'prev,next',
            ],
            'businessHours' => [
                // days of week. an array of zero-based day of week integers (0=Sunday)
                'daysOfWeek' => [0,  1, 2, 3, 4, 5, 6],
                'startTime' => "10:00",
                'endTime' => "18:00",
            ],
            'navLinks' => 'true',
            'selectable' => 'true',
            'selectMirror' => 'true',
            'editable' => 'true',
            'eventLimit' => 'true'
        ];

        $events = [];


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

        return view('schedule.list', compact('calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$options = [
            'plugins' => ['dayGrid', 'timeGrid', 'list', 'interaction'],
            'defaultView' => 'timeGridDay',
            'header' => [
                'left' => 'title',
                'center' => 'timeGridDay',
                'right' => 'prev,next',
            ],
            'businessHours' => [
                // days of week. an array of zero-based day of week integers (0=Sunday)
                'daysOfWeek' => [0,  1, 2, 3, 4, 5, 6],
                'startTime' => "10:00",
                'endTime' => "18:00",
            ],
            'navLinks' => 'true',
            'selectable' => 'true',
            'selectMirror' => 'true',
            'editable' => 'true',
            'eventLimit' => 'true'
        ];

        $events = [];
        $calendar = Calendar::addEvents($events);
        $calendar->setOptions($options);
        $calendar->setId('add');*/

        $minDate = date('Y-m-d');

        $maxDate = date('Y-m-d', strtotime("+30 day"));

        for ($hour = 6; $hour <= 23; $hour++) {
            $allowTimes[] = $hour.':00';
            $allowTimes[] = $hour.':30';
        }

        $allowTimeString = "'".implode("','", $allowTimes)."'";

        $title = Auth::user()->name;

        return view('schedule.add', compact(/*'calendar',*/ 'minDate', 'maxDate', 'allowTimeString', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_date'=>'required',
            'kids_under_two'=> 'required|integer',
            'kids_under_six'=> 'required|integer',
            'adults'=> 'required|integer',
            'bags'=> 'required|integer',
            'comments' => 'required'
        ]);

        $event = new Event;
        $event->title = Auth::user()->name;
        $event->start_date = $request->start_date;
        $event->end_date = $request->start_date;
        $event->user = Auth::user()->id;
        $event->kids_under_two = $request->kids_under_two;
        $event->kids_under_six = $request->kids_under_six;
        $event->adults = $request->adults;
        $event->bags = $request->bags;
        $event->comments = $request->comments;
        $event->save();
        return redirect()->route('schedule.index')->with('message', 'Event created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = Auth::user();
        if ($user->hasRole('admin')) {
            $data = Event::where('id', $id)->first();
        } else {
            $data = Event::where(['id'=> $id, 'user' => $user->id])->first();

            if (!($data instanceof Event)) {
                return redirect()->route('schedule.index')->with('message', 'Event not found!');
            }
        }

        $events = [];

        $minDate = date('Y-m-d');

        $maxDate = date('Y-m-d', strtotime("+30 day"));

        for ($hour = 6; $hour <= 23; $hour++) {
            $allowTimes[] = $hour.':00';
            $allowTimes[] = $hour.':30';
        }

        $allowTimeString = "'".implode("','", $allowTimes)."'";

        return view('schedule.show', compact( 'id','minDate', 'maxDate', 'allowTimeString', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = [];
        $data = Event::where('id', $id)->first();

        $minDate = date('Y-m-d');

        $maxDate = date('Y-m-d', strtotime("+30 day"));

        for ($hour = 6; $hour <= 23; $hour++) {
            $allowTimes[] = $hour.':00';
            $allowTimes[] = $hour.':30';
        }

        $allowTimeString = "'".implode("','", $allowTimes)."'";



        return view('schedule.edit', compact( 'id','minDate', 'maxDate', 'allowTimeString', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'start_date'=>'required',
            'kids_under_two'=> 'required|integer',
            'kids_under_six'=> 'required|integer',
            'adults'=> 'required|integer',
            'bags'=> 'required|integer',
            'comments' => 'required'
        ]);

        $event = Event::where('id', $id)->first();

        $event->start_date = $request->start_date;
        $event->end_date = $request->start_date;
        $event->kids_under_two = $request->kids_under_two;
        $event->kids_under_six = $request->kids_under_six;
        $event->adults = $request->adults;
        $event->bags = $request->bags;
        $event->comments = $request->comments;
        $event->save();

        return redirect()->route('schedule.index')->with('message', 'Event updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
