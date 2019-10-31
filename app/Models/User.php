<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $guarded = ['id','username','password','fullname','role','remember_token'];
    public $timestamps = false;

    public function usersList(){
        $users = User::orderBy('id','DESC')->get();
        return $users;
    }
    public function getPostAdd($request){
        $users = new User();
        $users->username = $request->username;
        $users->password = bcrypt($request->password);
        $users->fullname = $request->fullname;
        $users->remember_token = $request->_token;
        $users->role = $request->rdoLevel;
        $users->save();
        return $users;
    }

    public function getId($id){
        $users = User::find($id);
        return $users;
    }

    public function getPostEdit($request, $id){
        $users = User::find($id);
        $users->username = $request->username;
        $users->password = bcrypt($request->password);
        $users->fullname = $request->fullname;
        $users->remember_token = $request->_token;
        $users->role = $request->rdoLevel;
        $users->save();
        return $users;
    }

}
