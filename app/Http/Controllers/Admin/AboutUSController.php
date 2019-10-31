<?php

namespace App\Http\Controllers\Admin;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use File;

class AboutUSController extends Controller
{
    public function __construct(Aboutus $aboutus)
    {
       $this->aboutus = $aboutus;
    }

    public function index(){
        $abouts = $this->aboutus->aboutusList();
        return view('admin.aboutus.index',compact('abouts'));
    }

    public function getAdd(){
        return view('admin.aboutus.add');
    }

    public function postAdd(Request $request){
        $this->aboutus->insertOrUpdate($request);
        return redirect()->route('admin.aboutus.index')->with('success','Thêm mới giới thiệu thành công');
    }

    public function getEdit($id){
        $abouts = $this->aboutus->getId($id);
        return view('admin.aboutus.edit',compact('abouts'));
    }

    public function postEdit(Request $request, $id){
        $this->aboutus->insertOrUpdate($request,$id);
        return redirect()->route('admin.aboutus.index')->with('success','Cập nhật giới thiệu thành công');
    }

    public function action($action, $id){
        $msgAbout = $this->aboutus->actionId($action, $id);
        return redirect()->back()->with('success',$msgAbout);
    }
}
