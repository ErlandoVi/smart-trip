<?php

namespace App\Http\Controllers\Admin;

use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\StatusRequest;

class StatusController extends Controller
{
   
    public function index(): View
    {
        $statuses = Status::get();

        return view('admin.statuses.index', compact('statuses'));
    }

    public function create(): View
    {
        return view('admin.statuses.create');
    }

    public function store(StatusRequest $request): RedirectResponse
    {
        Status::create($request->validated());

        return redirect()->route('admin.statuses.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Status $status): View
    {
        return view('admin.statuses.show', compact('status'));
    }

    public function edit(Status $status): View
    {
        return view('admin.statuses.edit', compact('status'));
    }

    public function update(StatusRequest $request, Status $status): RedirectResponse
    {
        $status->update($request->validated());

        return redirect()->route('admin.statuses.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Status $status): RedirectResponse
    {
        $status->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}