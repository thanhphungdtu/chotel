<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    protected $table = 'room_type';
    protected $guarded = ['*'];
    public $timestamps = false;

    public function roomTypelist(){
        $roomTypeLists = Roomtype::select('id','tname')->get();
        return $roomTypeLists;
    }

    public function insertOrUpdate($RoomTypeRequest, $id=''){
        $roomType = new Roomtype();
        if($id)
        {
            $roomType = Roomtype::find($id);
        }
        $roomType->tname = $RoomTypeRequest->tname;
        $roomType->save();
        return $roomType;
    }

    public function getId($id){
        return $this->find($id);

    }
    public function deleteId($id){
        $roomType = Roomtype::find($id);
        return $roomType->delete();
    }
}
