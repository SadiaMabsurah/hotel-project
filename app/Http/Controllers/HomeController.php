<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;

class HomeController extends Controller
{
    public function room_details($id)
    {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }

    public function book_room(Request $request, $id)

    {
        $request->validate([
            'startDate'=>'required|date',
            'endDate'=>'date|after:startDate',
        ]);
        $booking = new Booking();

        $booking->room_id = $id;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->start_date = $request->startDate;
        $booking->end_date = $request->endDate;

        $booking->save();

        return redirect()->back()->with('success', 'Room booked successfully!');
    }
}
