<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Room;

use App\Models\Booking;

use App\Models\Gallary;

use App\Models\Contact;

use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            if($usertype=='user')
            {
                $room = Room::all();
                $gallary = Gallary::all();
                return view('home.index',compact('room', 'gallary'));
            }
            else if($usertype=='admin')
            {
                return view('admin.index');
            }
            else
            {
                return redirect()->back();
            }
        }
    }

    public function home()
    {
        $room = Room::all();
        $gallary = Gallary::all();
        return view('home.index',compact('room', 'gallary'));
    }

    public function create_room()
    {
        return view('admin.create_room');
    }
   public function add_room(Request $request)
{
    $data = new Room;

    $data->room_title = $request->title;
    $data->description = $request->description;
    $data->price = $request->price;
    $data->wifi = $request->wifi;
    $data->room_type = $request->type;

    $image = $request->file('image');
    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('room'), $imagename);
        $data->image = $imagename;
    }

    $data->save();

    return redirect('/view_room')->with('success', 'Room updated successfully!');
}

public function view_room()
    {
        $data = Room::all();
        return view('admin.view_room',compact('data'));
    }
    
    public function delete_room($id)
    {
        $data=Room::find($id);
        $data->delete();
        return redirect()->back();
    }


public function update_room($id)
{

    $data= Room::find($id);
    return view('admin.update_room',compact('data'));
}

public function edit_room(Request $request, $id)
{
   
    $room = Room::find($id);

    $room->room_title = $request->input('title');
    $room->description = $request->input('description');
    $room->price = $request->input('price');
    $room->wifi = $request->input('wifi');
    $room->room_type = $request->input('type');

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('room'), $filename);
        $room->image = $filename;
    }

    $room->save();

    return redirect('/view_room')->with('success', 'Room updated successfully!');
}

public function bookings()
{
    $data = Booking::all();
    return view('admin.booking', compact('data'));
}

public function delete_booking($id)
{
    $booking = Booking::find($id);
    if ($booking) {
        $booking->delete();
    }
    return redirect()->back();

}

public function approve_booking($id)
{
    $booking = Booking::find($id);
    if ($booking) {
        $booking->status = 'Approved';
        $booking->save();
    }
    return redirect()->back();
}

public function reject_booking($id)
{
    $booking = Booking::find($id);
    if ($booking) {
        $booking->status = 'Rejected';
        $booking->save();
    }
    return redirect()->back();
}

public function view_gallary()
{
    $gallary = Gallary::all();
    return view('admin.gallary', compact('gallary'));
}

public function upload_gallary(Request $request)
{

    $data = new Gallary;

    $image = $request->image;
    if ($image) {
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('gallary', $imagename);
        $data->image = $imagename;

        $data->save();

    return redirect()->back();
    }

    
}


public function delete_gallary($id)
{
    $gallary = Gallary::find($id);
    $gallary->delete();
    return redirect()->back();
}

public function all_messages()
{
    $messages = Contact::all();
    return view('admin.all_messages', compact('messages'));
}

public function send_email($id)
{
    $message = Contact::find($id);
    if ($message) {
        return view('admin.send_email', compact('message'));
    }
    return redirect()->back();
}

//reply user message via email
public function send_user_email(Request $request, $id)
{
    $message = Contact::find($id);
    if ($message) {
        $details = [
    'greeting'    => $request->greeting,
    'body'        => $request->body,
    'action_text' => $request->actiontext,
    'action_url'  => $request->actionurl,
    'end_part'    => $request->endpart,
  ];


        // Send notification
        $message->notify(new SendEmailNotification($details));

        return redirect()->back()->with('success', 'Email sent successfully!');
    }
    return redirect()->back()->with('error', 'Message not found.');
}
}