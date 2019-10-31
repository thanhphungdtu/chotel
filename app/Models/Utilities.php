<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utilities extends Model
{
    protected $table = 'utilities';
    protected $guarded = [''];
    public $timestamps = false;

    public function uitilitiesList(){
        $utilities = Utilities::orderBy('id','DESC')->get();
        return $utilities;
    }

    public function getPostAdd($request){
        $utilities = new Utilities();
        $utilities->uname = $request->uname;
        $utilities->save();
        return $utilities;
    }

    public function getId($id){
        $utilities = Utilities::find($id);
        return $utilities;
    }

    public function getPostEdit($request,$id){
        if($id){
            $utilities = Utilities::find($id);
            $utilities->uname = $request->uname;
            $utilities->save();
        }
        return $utilities;
    }

    public function deleteId($id){
        $utilities = Utilities::find($id);
        $utilities->delete();
        return $utilities;
    }

}
