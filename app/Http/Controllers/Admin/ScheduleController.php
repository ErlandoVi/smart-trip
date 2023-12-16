<?php

namespace App\Http\Controllers\Admin;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\ScheduleRequest;

class ScheduleController extends Controller
{
   
    public function index(): View
    {
        $schedules = Schedule::get();

        return view('admin.schedules.index', compact('schedules'));
    }

    public function create(): View
    {
        return view('admin.schedules.create');
    }

    public function store(ScheduleRequest $request): RedirectResponse
    {
        Schedule::create($request->validated());

        return redirect()->route('admin.schedules.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Schedule $schedule): View
    {
        return view('admin.schedules.show', compact('schedule'));
    }

    public function edit(Schedule $schedule): View
    {
        return view('admin.schedules.edit', compact('schedule'));
    }

    public function update(ScheduleRequest $request, Schedule $schedule): RedirectResponse
    {
        $schedule->update($request->validated());

        return redirect()->route('admin.schedules.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Schedule $schedule): RedirectResponse
    {
        $schedule->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}