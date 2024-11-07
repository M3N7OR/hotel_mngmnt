<?php

namespace App\Http\Controllers\Hotels;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apartment\Apartment;
use App\Models\Booking\Booking;
use App\Models\Hotel\Hotel;
use DateTime;
use Redirect;
use Session;
use Auth;
class HotelsController extends Controller
{
    
    public function rooms($id){

        $getRooms = Apartment::select()->orderBy('id','desc')->take(6)
            ->where('hotel_id',$id)->get();
        return view('hotels.rooms',compact('getRooms'));
    }
    public function roomDetails($id){

        $getRooms = Apartment::find($id);
        return view('hotels.roomdetails',compact('getRooms'));
    }
    public function roomBooking(Request $request, $id){

        $room =Apartment::find($id);
        $hotel =Hotel::find($id);

        if(strval(date("n/j/Y")) < strval($request->check_in) AND strval(date("n/j/Y")) < strval($request->check_out)){


            if($request->check_in < $request->check_out){
                
                $datetime1 = new DateTime($request->check_in);
                $datetime2 = new DateTime($request->check_out);
                $interval = $datetime1->diff($datetime2);
                $days = $interval->format('%a');
                    //logics 
                $bookRooms = Booking:: create([                  
                    "name"=>$request->name,
                    "email"=>$request->email,
                    "phone_number"=>$request->phone_number,
                    "check_in"=>$request->check_in,
                    "check_out"=>$request->check_out,
                    "days"=>$days,
                    "price"=>$days*$room->price,
                    "user_id"=>Auth::user()->id,
                    "room_name"=>$room->name,
                    // "hotel_name"=>SAGA_SUITE,
                    "name"=>$request->name,
                    "name"=>$request->name,
                ]);

                $totalPrice=$days * $room->price;
                $price= Session:: put('price',$totalPrice);

                $getPrice=Session::get($price);

                return Redirect::route('hotel.pay');
                // echo "Booked Successfully";
                    
            }else{

                return Redirect::route('hotel.rooms.details',$room->id)->with(['error' =>'Check-Out date should be greater than Check-in Date']);

            }
        }
        
        else{

            return Redirect::route('hotel.rooms.details',$room->id)->with(['error_dates' =>'Choose date in the Future Invalid check in or check out dates']);

        }
    }
    
    
    public function payWithPaypal(){

        return view('hotels.pay');
    }

    public function success(){

        Session::forget('price');
        return view('hotels.success');
    }


    
}
