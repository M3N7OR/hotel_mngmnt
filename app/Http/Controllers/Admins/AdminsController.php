<?php

namespace App\Http\Controllers\Admins;


use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Admin;
use App\Models\Hotel\Hotel;
use App\Models\Apartment\Apartment;
use App\Models\Booking\Booking;

use Redirect;


class AdminsController extends Controller
{
    
    public function viewLogin(){

        return view('admins.login');
    }

    public function checkLogin(Request $request){

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            
            return redirect() -> route('admins.dashboard');
        }
        return redirect()->back()->with(['error' => 'error logging in']);
    }
    public function index(){

        $adminsCount =Admin::select()->count();
        $roomsCount =Hotel::select()->count();
        // $adminsCount =Admin::select()->count();
        return view('admins.index',compact('adminsCount','roomsCount'));
    }

    public function allAdmins(){

        $admins=Admin::select()->orderBy('id','desc')->get();
        return view('admins.alladmins',compact('admins'));
    }

    public function createAdmins(){

        return view('admins.createadmins');
    }

    public function storeAdmins(Request $request){

        $storeAdmins =Admin::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>Hash::make($request->name),
        ]);
        if($storeAdmins){

            return Redirect::route('admins.all')->with(['Success'=>'Admin created successfully']);
        }

        // return view('admins.createadmins');
    }

    public function allHotels(){

        $hotels=Hotel::select()->orderBy('id','desc')->get();
        return view('admins.allhotels',compact('hotels'));

    }
    public function allRooms(){

        $rooms=Apartment::select()->orderBy('id',)->get();
        return view('admins.allrooms',compact('rooms'));
    }

    public function createRooms(){

        $hotels=Hotel::all();

        return view('admins.createrooms',compact('hotels'));
    }
    
    public function storeRooms(Request $request){

        $destinationPath='assets/images/';
        $myimage=$request->image->getClientOriginalName();
        $request->image->move(public_path($destinationPath),$myimage);
        $storeRooms=Apartment::create([
            "name" =>$request->name,
            "image" =>$myimage,
            "max_persons" => $request->max_persons,
            "size" =>$request->size,
            "num_beds" =>$request->num_beds,
            "price" =>$request->price,
            // "location" =>$request->location,
        ]);
        if($storeRooms){

            return Redirect:: route('rooms.all')->with(['success' => "Room Created Successfully"]);
        }

    }
    public function deleteRooms($id){
            
        $room =Apartment::find($id);

        if(File::exists(public_path('assets/images/',$room->image))){
            File::delete(public_path('assets/images/',$room->image));
        }
        else{
            // dd('File Doesnt exist');
        }
        $room->delete();

        if($room){

            return Redirect::route('room.all')->with(['delete' =>"Room Deleted Successfully"]);
        }
    }


    public function allBookings(){

        $hotels=Hotel::all();

        $bookings=Booking::select()->orderBy('id',)->get();
        return view('admins.allbookings',compact('bookings','hotels'));
    }


    public function editStatus($id){

        $booking =Booking::find($id);
        return view('admins.editstatus',compact('booking'));
    }
    

    public function updateStatus(Request $request,$id){

        $status=Booking::find($id);
        $status->update($request->all());

        if($status){

            return Redirect::route('bookings.all')->with(['update'=>'Status Updated Successfully']);
        }
    }

    public function deleteBookings($id){
            
        $booking=Booking::find($id);

        $booking->delete();

        if($booking){

            return Redirect::route('bookings.all')->with(['delete' =>"Booking  Deleted Successfully"]);
        }
    }

}
