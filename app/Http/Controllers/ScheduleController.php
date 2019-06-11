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
        $options = [
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
        $options = [
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
        $calendar->setId('add');

        return view('schedule.add', compact('calendar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->title = Auth::user()->name;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
