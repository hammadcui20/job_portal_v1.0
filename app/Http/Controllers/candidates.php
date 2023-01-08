<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Company;
use App\Models\job;
use App\Models\apps;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;
class candidates extends Controller
{
    
function insert(Request $req){
    $newuser = new Candidate;
    $newuser->u_id = Auth::id();
    // $newuser->email=Auth::email();
    $newuser->fname = $req->input("fname");
    $newuser->lname = $req->input("lname");
    $newuser->email = $req->input("email");
    $newuser->intro = $req->input("intro");
    $newuser->bday = $req->input("bday");
    $newuser->age = $req->input("age");
    $newuser->pyear = $req->input("pyear");
    $newuser->hq = $req->input("hq");
    $newuser->stream = $req->input("stream");
    $newuser->phone = $req->input("phone");
    $newuser->address = $req->input("address");
    $newuser->city = $req->input("city");
    $newuser->state = $req->input("state");
    $newuser->skills = $req->input("skills");
    $newuser->desig = $req->input("desig");
    $newuser->save();
    return redirect("cv-upload");
}
    public function profileview()
    {
    
        $wordCount = 0;
            $data  =  Candidate::where('u_id',Auth::id())->first();
            if($data->count()>0)
            {
                return view('user.edit-profile', compact('data'));
            }  
    }
    //Candidates Table update
    public function update(Candidate $user, Request $request)
    {   
        Candidate::where('u_id',Auth::id())->update([
		'fname' => $request->fname, 
		'lname' => $request->lname,
        'address'=> $request->address,
        'city'=> $request->city,
        'state'=> $request->state,
        'phone'=> $request->contactno,
        'hq'=> $request->qualification,
        'stream'=> $request->stream,
        'skills'=> $request->skills,
        'intro'=> $request->aboutme,
	]);
        return view('user.index');
    }
    public function update_pass(User $user, Request $request)
    {   
        User::where('id',Auth::id())->update([
		'password' => bcrypt($request->password), 
		// 'lname' => $request->lname,
	]);
        return view('user.index');
    }
    //lists applied jobs
    public function jobview()
    {
    
        $wordCount = 0;
        $app_check  =  apps::where('u_id',Auth::id())->get();
        $num=$app_check->count();
        for($i=0;$i<$num;$i++)
        {
            $job_detail =  job::where('j_id',$app_check[$i]->j_id)->get();
            // if($job_detail->count() > 0)
            // {
               return view('user.index', compact('job_detail'));
            // } 
            // echo($job_detail); 
        }
        // echo($job_detail);
        // $job_detail  =  job::where('j_id',$key)->get();
        // echo($job_detail);
        //     if($job_detail->count() > 0)
        //     {
        //         return view('user.index', compact('job_detail'));
        //     }  
    }
    public function view()
    {
        $wordCount = 0;
        $data  =  job::get();
        if($data->count() > 0)
    {
            return view('user.job-posted', compact('data'));
    } 
    } 
    public function jobapply($j_id,$c_id)
    {
        $newuser = new apps;
        $newuser->u_id = Auth::id();
        $newuser->j_id=$j_id;
        $newuser->com_id = $c_id;
        $newuser->save();
        return redirect("/index");
    }
}
