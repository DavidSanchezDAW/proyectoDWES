<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('visible', true)->get();
        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new Event();
        $event->name = $request->name;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->visible = $request->visible ? 1:0;
        $event->time = $request->time;
        $event->save();
        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $event->name = $request->name;
        $event->location = $request->location;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->visible = $request->visible ? 1:0;
        $event->time = $request->time;
        $event->save();
        return redirect()->route('events.index');
    }
    public function participate(Event $event)
    {
        $event->users()->attach(auth()->user()->id);
        return redirect()->route('events.show', $event);
    }

    public function unparticipate(Event $event)
    {
        $event->users()->detach(auth()->user()->id);
        return redirect()->route('events.show', $event);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }
}
