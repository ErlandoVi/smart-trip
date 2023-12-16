<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\EventRequest;

class EventController extends Controller
{
   
    public function index(): View
    {
        $events = Event::get();

        return view('admin.events.index', compact('events'));
    }

    public function create(): View
    {
        return view('admin.events.create');
    }

    public function store(EventRequest $request): RedirectResponse
    {
        if($request->validated()){
            $key_speaker = $request->file('key_speaker')->store('assets/event','public');

            Event::create($request->except('key_speaker') + ['key_speaker' => $key_speaker]);
        }
        return redirect()->route('admin.events.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Event $event): View
    {
        return view('admin.events.show', compact('event'));
    }

    public function edit(Event $event): View
    {
        return view('admin.events.edit', compact('event'));
    }

    public function update(EventRequest $request, Event $event): RedirectResponse
    {
        if($request->validated()){
            if($request->key_speaker){
                File::delete('storage/' . $event->key_speaker);
                $key_speaker = $request->file('key_speaker')->store('assets/event','public');

                $event->update($request->except('key_speaker') + ['key_speaker' => $key_speaker]);
            }else{
                $event->update($request->validated());
            }
        }

        return redirect()->route('admin.events.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Event $event): RedirectResponse
    {
        File::delete('storage/' . $event->key_speaker);
        $event->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}