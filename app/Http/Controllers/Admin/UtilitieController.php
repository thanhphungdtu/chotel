<?php

namespace App\Http\Controllers\Admin;

use App\Models\Utilities;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UtilitieController extends Controller
{
    public function __construct(Utilities $utilities)
    {
        $this->utilities = $utilities;
    }

    public function index(){
        $utilities =  $this->utilities->uitilitiesList();
        return view('admin.utilities.index',compact('utilities'));
    }
    public function getAdd(){
        return view('admin.utilities.add');
    }

    public function postAdd(Request $request){
        $this->utilities->getPostAdd($request);
        return redirect()->route('admin.utilitie.index')->with('success','Thêm mới tiện ích thành công');
    }

    public function getEdit($id){
        $utilities = $this->utilities->getId($id);
        return view('admin.utilities.edit',compact('utilities'));
    }

    public function postEdit(Request $request,$id){
        $this->utilities->getPostAdd($request,$id);
        return redirect()->route('admin.utilitie.index')->with('success','Cập nhật tiện ích thành công');
    }

    public function getDelete($id){
        $this->utilities->deleteId($id);
        return redirect()->route('admin.utilitie.index')->with('success','Xóa tiện ích thành công');
    }
}
