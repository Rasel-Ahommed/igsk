<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        // Fetch events for the logged-in user
        $events = Event::get();
        // dd($events);
        return view('backoffice.home.event', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'color' => 'required',
            'start_data' => 'date|after_or_equal:start_date',
            'end_data' => 'date|after_or_equal:start_date',
            'description' => 'required|string|max:255'
        ]);
        // $data[''] = $request->
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['color_code'] = $request->color;
        $data['start_date'] = $request->start_data;
        $data['end_date'] = $request->end_data;
        $data['user_id'] = 1;

        Event::create($data);

        return redirect()->back()->with('success', 'Event created successfully');
    }

    public function edit(Event $event)
    {
        // Ensure the event belongs to the logged-in user
        $this->authorize('view', $event);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        // Ensure the event belongs to the logged-in user
        $this->authorize('update', $event);

        $request->validate([
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ]);

        $event->update($request->all());

        return redirect()->route('events.index')->with('success', 'Event updated successfully');
    }

    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        $event->delete();

        return redirect()->back()->with('delete', 'Event deleted successfully');
    }

    
    public function get_event_data()
    {
        $event = Event::get();

        

        $data = [
            'status' => 'success',
            'events' => $event
        ];
    
        return response()->json($data);
    }


}
