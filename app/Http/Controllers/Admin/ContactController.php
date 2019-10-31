<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::orderBy('id','DESC')->get();
        return view('admin.contact.index',compact('contacts'));
    }
    public function getDelete($id){
        $contacts = Contact::find($id);
        $contacts->delete();
        return redirect()->route('admin.contact.index')->with('success','Xóa liên hệ thành công');
    }
}
