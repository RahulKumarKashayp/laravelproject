<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Usercontroller extends Controller
{
    function getdata(request $req){
    return $req->input();
    }
}
