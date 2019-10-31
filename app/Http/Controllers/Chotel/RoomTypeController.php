<?php

namespace App\Http\Controllers\Chotel;

use App\Models\Rooms;
use App\Models\Roomtype;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class RoomTypeController extends Controller
{
    public function index(Request $request){
        $roomtypes = Roomtype::limit(4)->get();


        $rooms = Rooms::with('utilities:id,uname');

        $rooms = $rooms->where('rname','like','%'.$request->search.'%')->paginate(5);

        return view('chotel.room_type.cat',compact('roomtypes','rooms'));
    }

    public function detail(Request $request){
        $arrayUrl = preg_split('/(-)/i',$request->segment(2));
        $id = array_pop($arrayUrl);//lay id

        if ($id)
        {
            $roomDetail = Rooms::with('roomtype:id,tname','utilities:id,uname')->find($id);
            $rooms = Rooms::where('id','!=',$id)->limit(3)->get();

            $viewData = [
                'roomDetail' => $roomDetail,
                'rooms' => $rooms
            ];

            return view('chotel.room_type.detail',$viewData);
        }
        return redirect('/');
       /* return view('chotel.room_type.detail');*/
    }
    public function cat(Request $request){
        $arrayUrl = preg_split('/(-)/i',$request->segment(2));
        $id = array_pop($arrayUrl);//lay id

        if($id){
            $rooms = Rooms::with('utilities:id,uname')->where('type_id',$id)->paginate(5);
        }
        return view('chotel.room_type.cattype',compact('rooms'));
    }

}
