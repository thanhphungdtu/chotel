<?php

namespace App\Http\Controllers\Chotel;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendEmailInfoUser;
use Mail;

class ContactController extends Controller
{
    public function index(){
        return view('chotel.contact.contact');
    }

    //gui lien he
    public function postIndex(Request $request){
       $contacts = new Contact();
       $contacts->fullname = $request->fullname;
       $contacts->email = $request->email;
       $contacts->subject = $request->subject;
       $contacts->c_content = $request->contentt;
       $contacts->save();
        $data = $request->except('_token');
        Mail::to($data['email'])->cc('parksaming@gmail.com')->send(new SendEmailInfoUser($data));
        echo "<script>
				alert('Cảm ơn bạn đã góp ý .Chúng tôi sẽ liên hệ lại với bạn trong thời gian sớm nhất');
				window.location = '".url('/lien-he')."'
			</script>";
       //return redirect()->back()->with('status','Cảm ơn bạn đã gửi liên hệ, chúng tôi sẽ sớm phản hồi lại cho .');

    }
}
