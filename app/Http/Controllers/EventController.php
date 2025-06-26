<?php

namespace App\Http\Controllers;

use App\Models\EventsModel;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // READ: Get all events
    public function index()
    {
        $events = EventsModel::all();
        return view('Events', compact('events'));
    }

    // CREATE: Show form
    public function create()
    {
        return view('events_create');
    }

    // CREATE: Store new event
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        EventsModel::create($request->only('title', 'description'));
        return redirect()->route('events.index')->with('success', 'Event created!');
    }

    // READ: Show single event
    public function show($id)
    {
        $event = EventsModel::findOrFail($id);
        return view('events_show', compact('event'));
    }

    // UPDATE: Show edit form
    public function edit($id)
    {
        $event = EventsModel::findOrFail($id);
        return view('events_edit', compact('event'));
    }

    // UPDATE: Update event
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $event = EventsModel::findOrFail($id);
        $event->update($request->only('title', 'description'));
        return redirect()->route('events.index')->with('success', 'Event updated!');
    }

    // DELETE: Delete event
    public function destroy($id)
    {
        $event = EventsModel::findOrFail($id);
        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted!');
    }
}