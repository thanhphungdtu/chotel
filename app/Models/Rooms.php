<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

class Rooms extends Model
{
    protected $table = 'rooms';
    protected $guarded = ['*'];
    public $timestamps = true;

    public function roomtype(){
        return $this->belongsTo(Roomtype::class,'type_id');
    }
    public function utilities(){
        return $this->belongsTo(Utilities::class,'uid');
    }

    public function roomList(){
        $rooms = Rooms::with('roomtype:id,tname','utilities:id,uname')
            ->orderBy('id','DESC')->paginate(4);
        return $rooms;
    }

    public function roomtypeList(){
        $roomTypes = Roomtype::all();
        return $roomTypes;
    }

    public function utilitiesList(){
        $utilities = Utilities::all();
        return $utilities;
    }

    public function insertOrUpdate($request,$id=''){
        $rooms = new Rooms();
        if($id) $rooms = Rooms::find($id);
        $rooms->rname = $request->rname;
        $rooms->type_id = $request->type_id;
        $rooms->uid = $request->uid;
        $rooms->description = $request->description;

        if($request->hasFile('picture'))
        {
            $file = upload_image('picture');
            /*dd($file);*/
            if(isset($file['name']))
            {
                $rooms->picture = $file['name'];
                if(File::exists($file['path_img'])){//ton tai duong dan cu
                    File::delete($file['path_img']);
                }
            }
        }
        $rooms->save();
        return $rooms;
    }

    public function getId($id){
        $room = Rooms::find($id);
        return $room;
    }

    public function deleteId($id){
        $rooms = Rooms::find($id);
        $rooms->delete();
        return $rooms;
    }
}
