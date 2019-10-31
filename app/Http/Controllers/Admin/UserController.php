<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(){
        $users =  $this->user->usersList();
        return view('admin.user.index',compact('users'));
    }
    public function getAdd(){
        return view('admin.user.add');
    }

    public function postAdd(Request $request){
        $this->user->getPostAdd($request);
        return redirect()->route('admin.user.index')->with('success','Thêm người dùng thành công');
    }

    public function getEdit($id){
        $users = $this->user->getId($id);
        if(Auth::user()->role == 1 )

        {
            if(Auth::user()->id == 1 && Auth::user()->username == 'admin')
            {
                return view('admin.user.edit', compact('users'));
            }
            else
            {
                // admin thuong
                if(Auth::user()->id == $id || $users['role'] == 2)
                {
                    return view('admin.user.edit', compact('users'));
                }
                else
                {
                    return redirect()->route('admin.user.index')->with('danger','Bạn không có quyền sửa admin khác hoặc supper admin!!');
                }
            }
        }
        else
        {
            if (Auth::user()->id == $id){
                return view('admin.user.edit', compact('users'));
            }
            else{
                return redirect()->route('admin.user.index')->with('danger','Bạn không có quyền sửa ok!!');
            }
        }
    }
    public function postEdit(Request $request, $id){
        $this->user->getPostEdit($request, $id);
        return redirect()->route('admin.user.index')->with('success','Cập nhật người dùng thành công');
    }
    public function getDelete($id){
        $user_current_login = \Auth::user()->id;
        $users = $this->user->getId($id);

        if(($id == 1) || ($user_current_login != 1 && $users['role'] == 1)) {
            return redirect()->route('admin.user.index')->with('danger', 'Bạn không có quyền xóa ok!!');
        }else{
            $users->delete();
            return redirect()->route('admin.user.index')->with('success', 'Xóa người dùng thành công');
        }
    }
}
