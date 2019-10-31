<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoomTypeRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Roomtype;

class RoomTypeController extends Controller
{
    public function __construct (Roomtype $roomtype){
        $this->roomtype = $roomtype;
    }
    public function index(){
        $roomTypeLists = $this->roomtype->roomTypelist();
        return view('admin.room_type.index',compact('roomTypeLists'));
    }

    public function getAdd(){
        return view('admin.room_type.add');
    }

    public function postAdd(RoomTypeRequest $RoomTypeRequest){
        $this->roomtype->insertOrUpdate($RoomTypeRequest);
        return redirect()->route('admin.roomtype.index')->with('success','Thêm mới loại phòng thành công!');
    }

    public function getEdit($id){
        $roomType = $this->roomtype->getId($id);
        return view('admin.room_type.add',compact('roomType'));
    }

    public function postEdit(RoomTypeRequest $RoomTypeRequest,$id){
        $this->roomtype->insertOrUpdate($RoomTypeRequest,$id);
        return redirect()->route('admin.roomtype.index')->with('success','Cập nhật loại phòng thành công!');
    }

    public function getDelete($id){
        $this->roomtype->deleteId($id);
        return redirect()->route('admin.roomtype.index')->with('success','Xóa loại phòng thành công!');
    }

}
