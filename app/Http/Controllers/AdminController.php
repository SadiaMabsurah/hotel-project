<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Room;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            if($usertype=='user')
            {
                return view('home.index');
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
        return view('home.index');
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

    return redirect()->back()->with('success', 'Room added successfully!');
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

}