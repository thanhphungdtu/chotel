<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;


class LoginController extends Controller
{

    public function getLogin(){
        return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        $login = array(
            'username' => $request->username,
            'password' => $request->password,
        );
        if(\Auth::attempt($login)){
            return redirect()->route('admin.index.index');
        }else
        {
            return redirect()->route('admin.auth.getlogin')->with('thongbao','Sai tài khoản hoặc mật khẩu');
        }
    }

    public function getLogout(){
        \Auth::logout();
        return redirect()->route('admin.auth.getlogin');
    }
}
