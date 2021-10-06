<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\laraveluser;
class logincontroller extends Controller
{
    function fetchdata(request $req){
       return DB::select("select * from laravelusers");

//        $sql =$req->only('email','password');
//        if(Auth::attempt ($sql)){
            return redirect()->intended('index')->withSuccess("login successfull");
//        }
//        else{
//            return  redirect('login')->withSuccess("sorry");
//        }
//    }
        }

}
