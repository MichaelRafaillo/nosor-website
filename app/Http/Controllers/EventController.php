<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::where('status', 'active')
            ->with('images')
            ->latest()
            ->paginate(12);
        
        return view('events.index', compact('events'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::where('status', 'active')
            ->with('images')
            ->findOrFail($id);
        
        return view('events.show', compact('event'));
    }
}
