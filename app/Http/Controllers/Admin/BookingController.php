<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\BookingRequest;

class BookingController extends Controller
{
   
    public function index(): View
    {
        $bookings = Booking::get();

        return view('admin.bookings.index', compact('bookings'));
    }

    public function create(): View
    {
        return view('admin.bookings.create');
    }

    public function store(BookingRequest $request): RedirectResponse
    {
        Booking::create($request->validated());

        return redirect()->route('admin.bookings.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Booking $booking): View
    {
        return view('admin.bookings.show', compact('booking'));
    }

    public function edit(Booking $booking): View
    {
        return view('admin.bookings.edit', compact('booking'));
    }

    public function update(BookingRequest $request, Booking $booking): RedirectResponse
    {
        $booking->update($request->validated());

        return redirect()->route('admin.bookings.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Booking $booking): RedirectResponse
    {
        $booking->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }
}