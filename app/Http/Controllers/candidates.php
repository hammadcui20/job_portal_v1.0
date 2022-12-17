<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class candidates extends Controller
{
    
function insert(Request $req){
    $newuser = new Candidate;

    $newuser->fname = $req->input("fname");
    $newuser->lname = $req->input("lname");
    $newuser->email = $req->input("email");
    $newuser->intro = $req->input("intro");
    $newuser->bday = $req->input("bday");
    $newuser->age = $req->input("age");
    $newuser->pyear = $req->input("pyear");
    $newuser->hq = $req->input("hq");
    $newuser->stream = $req->input("stream");
    $newuser->password = $req->input("password");
    $newuser->cpassword = $req->input("cpassword");
    $newuser->phone = $req->input("phone");
    $newuser->address = $req->input("address");
    $newuser->city = $req->input("city");
    $newuser->state = $req->input("state");
    $newuser->skills = $req->input("skills");
    $newuser->desig = $req->input("desig");
    $newuser->pdf = $req->input("pdf");
    $newuser->save();
    return redirect("candidateLogin");
}

function canlogin(Request $req){
    $username = $req->input('email');
    $userpassword = $req->input('password');
    $check = DB::table('candidates')->where('email',$username)->where('password',$userpassword)->get();
    $auth = count($check);
    if($auth == 1){
        return redirect('candashboard');
    }
    else{
        return redirect('candidateLogin');
    }
}
}