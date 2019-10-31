<?php

namespace App\Http\Controllers\Chotel;

use App\Models\Rooms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(){
        $rooms = Rooms::with('utilities:id,uname')->paginate(7);
        return view('chotel.home.index',compact('rooms'));
    }
}
