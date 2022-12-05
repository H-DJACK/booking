<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('event.index', ["events" => $events]);
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'city' => 'required',
            'country' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'place' => 'required',
            'image' => ['required', 'image'],
        ]);


        $imagePath = request('image')->store('events', 'public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit('300', '300');

        $image->save();

        Event::create(array_merge(
            $data,
            ['image' => $imagePath]
        ));

        return redirect('/events');
    }


    public function create()
    {
        return view("event.create");
    }


    public function show(\App\Models\Author $event)
    {
        return view('event.show', compact('event'));
    }
}
