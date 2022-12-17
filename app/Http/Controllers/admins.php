<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Http\Request;

class admins extends Controller
{
    function adlogin(Request $req){
        $username = $req->input('username');
        $userpassword = $req->input('password');
        $check = DB::table('admins')->where('username',$username)->where('password',$userpassword)->get();
        $auth = count($check);
        if($auth == 1){
            return redirect('dashboard');
        }
        else{
            return redirect('Admin');
        }
    }
}
