<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Package;
use App\Models\Booking;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show()
    {
        $data_package=Package::all();
        $data_event=Event::all();

        return view('frontend.main',compact('data_package','data_event'));

    }

    public function paket()
    {
        $data_package=Package::all();
        $data_event=Event::all();

        return view('frontend.paket',compact('data_package','data_event'));

    }

    public function booking()
    {
        $data_package=Package::all();
        $data_event=Event::all();

        return view('frontend.detailbooking',compact('data_package','data_event'));

    }

    public function calendar(Request $request)
    {
        $data_package=Package::all();
        $data_event=Event::all();

        return view('frontend.calendar',compact('data_package','data_event'));

    }

    public function calendardetail(Request $request)
    {
        $data_package=Package::all();
        $data_event=Event::all();

        return view('frontend.calendardetail',compact('data_package','data_event'));

    }

    public function mitra(Request $request)
    {
        $data_package=Package::all();
        $data_event=Event::all();

        return view('frontend.mitra',compact('data_package','data_event'));

    }

    public function simpanBooking(Request $request)
    {
        // $booking = [];
        // $booking = $request->all();
        // $booking['email'] = $request->post('email');
        // $booking['phone'] = $request->post('phone');
        // Booking::create($booking);
        $booking = new Booking;
        $booking->email = $request->email;
        $booking->phone = $request->phone;  
        $booking->save();

        return back()->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function historyBooking(Request $request)
    {
        $bookings = Booking::get();

        return view('history', compact('bookings'));
    }
}
