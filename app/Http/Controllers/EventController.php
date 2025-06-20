<?php

namespace App\Http\Controllers;
use App\Models\EventModel; // Import the EventModel

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = \App\Models\EventsModel::all(); // Fetch all events
        return view('Events', compact('events'));
    }
}