<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Gallary;

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

        $startDate =$request->startDate;
        $endDate = $request->endDate; 

        //already booked or not
        $isBooked = Booking::where('room_id', $id)
            ->where('start_date', '<=', $endDate)
            ->where('end_date', '>=', $startDate)->exists();

            if($isBooked){
                return redirect()->back()->with('message', 'Room is already booked Please choose another date');
            }
            else{
                $booking->start_date = $request->startDate;
                $booking->end_date = $request->endDate;

                $booking->save();

                return redirect()->back()->with('message', 'Room booked successfully!');

            }
        
    }

    //contact function
    public function contact(Request $request)
    {

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('message', 'Your message has been sent successfully!');
    }


    public function our_rooms()
{
    $room = Room::all();
    return view('home.our_rooms', compact('room'));
}

public function hotel_gallary()
{
    $gallary = Gallary::all();
    return view('home.hotel_gallary', compact('gallary'));  

}

public function contact_us()
{
    return view('home.contact_us');
}

}