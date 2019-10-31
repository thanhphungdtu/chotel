<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rooms;
use App\Models\Roomtype;
use App\Models\Utilities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class RoomController extends Controller
{
    public function __construct(Rooms $rooms)
    {
        $this->rooms = $rooms;
    }

    public function index(){
        $rooms = $this->rooms->roomList();
        return view('admin.room.index',compact('rooms'));
    }
    public function getAdd(){
        $roomTypes = $this->rooms->roomtypeList();
        $utilities = $this->rooms->utilitiesList();
        return view('admin.room.add',compact('roomTypes','utilities'));
    }

    public function postAdd(Request $request){
        $this->rooms->insertOrUpdate($request);
        return redirect()->route('admin.room.index')->with('success','Thêm mới phòng thành công!');
    }

    public function getEdit($id){
        $room = $this->rooms->getId($id);
        $roomTypes = $this->rooms->roomtypeList();
        $utilities = $this->rooms->utilitiesList();
        return view('admin.room.edit',compact('roomTypes','room','utilities'));
    }

    public function postEdit(Request $request,$id){
        $this->rooms->insertOrUpdate($request,$id);
        return redirect()->route('admin.room.index')->with('success','Cập nhật phòng thành công!');
    }


    public function getDelete($id){
        $this->rooms->deleteId($id);
        return redirect()->route('admin.room.index')->with('success','xóa phòng thành công');
    }
}
