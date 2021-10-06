<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laraveluser;
class laravelusercontroller extends Controller
{
    //
    function getdata(request $req)
    {
//        return laraveluser::all();
        $laraveluser = new Laraveluser;
        $laraveluser->fname=$req->fname;
        $laraveluser->lname=$req->lname;
        $laraveluser->phone=$req->phone;
        $laraveluser->email=$req->email;
        $laraveluser->password=$req->password;
        $laraveluser->save();

    }
}
