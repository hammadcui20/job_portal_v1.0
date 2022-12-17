<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use Illuminate\Http\Request;

class companies extends Controller
{
    function insert(Request $req){
        $newuser = new Company;
    
        $newuser->name = $req->input("name");
        $newuser->companyname = $req->input("companyname");
        $newuser->website = $req->input("website");
        $newuser->email = $req->input("email");
        $newuser->aboutme = $req->input("aboutme");
        $newuser->password = $req->input("password");
        $newuser->cpassword = $req->input("cpassword");
        $newuser->contactno = $req->input("contactno");
        $newuser->state = $req->input("state");
        $newuser->city = $req->input("city");
        $newuser->image = $req->input("image");
        $newuser->save();
        return redirect("companylogin");
    }
    
    function comlogin(Request $req){
        $username = $req->input('email');
        $userpassword = $req->input('password');
        $check = DB::table('companies')->where('email',$username)->where('password',$userpassword)->get();
        $auth = count($check);
        if($auth == 1){
            return redirect('comdashboard');
        }
        else{
            return redirect('companylogin');
        }
    }
    
}
