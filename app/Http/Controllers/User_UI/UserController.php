<?php

namespace App\Http\Controllers\User_UI;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function tank_cleaning(){
        return view('user-ui.pages.tank_cleaning');
    }

    public function process(){
        return view('user-ui.pages.hold_cleaning');
    }
    
    public function underwater_hull(){
        return view('user-ui.pages.underwater_hull');
    }
    
    public function contact_us(){
        return view('user-ui.pages.contact_us');
    }
    
}
