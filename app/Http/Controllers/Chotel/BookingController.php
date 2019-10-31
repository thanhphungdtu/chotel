<?php

namespace App\Http\Controllers\Chotel;

use App\Models\Rooms;
use App\Models\Roomtype;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function __construct (Roomtype $roomtype){
        $this->roomtype = $roomtype;
    }
    public function getBooKing(){
        $roomTypes = $this->roomtype->roomTypelist();
        return view('chotel.booking.booking',compact('roomTypes'));
    }

    public function postBooKing(Request $request,$id){
        //dd($request->all());
        $rooms = Rooms::select('rname','id','r_price','type_id')->find($id);
        if(!$rooms){
            return redirect('/');
        }


        Cart::add([
            'id' => $id,
            'name' => $request->t_name,
            'qty' => $request->t_qty,
            'price' => $rooms->r_price,
            'weight' =>1,
            'options' => [
                't_phone' => $request->t_phone,
                't_email'   => $request->t_email,
                't_address' => $request->t_address,
                't_checkin' => $request->t_checkin,
                't_checkout' => $request->t_checkout,
                'type_id' => $rooms->rname,
                't_big' => $request->t_big,
                't_mall' => $request->t_mall,
                't_note' => $request->t_note
            ]//them
        ]);
        return redirect()->route('chotel.booking.cofirm');
    }

    public function booKingConfirm(){
        $rooms = Cart::content()->first();

        return view('chotel.booking.confirm',compact('rooms'));
    }

    public function saveInfoBooking(){
        $totalMoney = str_replace(',','',Cart::subtotal(0,3));
        $rooms = Cart::content();
        foreach ($rooms as $room){
            Transaction::insert([
                'room_id' => $room->id,
                't_name' => $room->name,
                't_adress'=>$room->options->t_address,
                't_phone'=>$room->options->t_phone,
                't_email'=>$room->options->t_email,
                't_note'=>$room->options->t_note,
                't_name_room'=>$room->options->type_id,
                't_date_checkin'=>$room->options->t_checkin,
                't_date_checkout'=>$room->options->t_checkout,
                't_big'=>$room->options->t_big,
                't_mall'=>$room->options->t_mall,
                't_total'=> $totalMoney
            ]);
        }
        Cart::destroy();
        return redirect()->route('chotel.index.index')->with('success','Bạn đã đặt phòng thành công');
    }
}
