<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Models\job;
use App\Models\apps;
use App\Models\Candidate;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Auth;
class companies extends Controller
{
    function insert(Request $req){
        $newuser = new Company;
        $newuser->u_id = Auth::id();
        $newuser->email=auth()->user()->email;
        $newuser->name = $req->input("name");
        $newuser->companyname = $req->input("companyname");
        $newuser->website = $req->input("website");
        $newuser->aboutme = $req->input("aboutme");
        $newuser->contactno = $req->input("contactno");
        $newuser->state = $req->input("state");
        $newuser->city = $req->input("city");
        $newuser->save();
        return redirect("/manager/comdashboard");
    }
    public function profileview()
    {
    
        $wordCount = 0;
        // $app_check  =  apps::where('u_id',Auth::id())->first()->j_id;
        // echo($app_check);
            $data  =  Company::where('u_id',Auth::id())->first();
            // echo($data);
            if($data->count() > 0)
            {
                return view('company.edit-company', compact('data'));
            }  
    }
    //for company to check their posted jobs
    public function jobview()
    {
        $wordCount = 0;
        // $app_check  =  Company::where('u_id',Auth::id())->first()->id;
        // echo($app_check);
        $jobs  =  job::where('c_id',Auth::id())->get();
        // echo($jobs);

            if($jobs->count() > 0)
            {
                return view('company.my-job-post', compact('jobs'));
            }  
    }
    public function appview()
    {
    
        $wordCount = 0;
        $app_check  =  apps::where('com_id',Auth::id())->first()->u_id;
        $jobs  =  Candidate::where('u_id',$app_check)->first();

            if($jobs->count() > 0)
            {
                return view('company.job-applications', compact('jobs'));
            }  
    }
    public function update(Company $user, Request $request)
    {   
        Company::where('u_id',Auth::id())->update([
		'companyname' => $request->companyname, 
		'website' => $request->website,
        'aboutme'=> $request->aboutme,
        'city'=> $request->city,
        'state'=> $request->state,
        'contactno'=> $request->contactno,
	]);
        return view('company.index');
    }
    public function update_pass(User $user, Request $request)
    {   
        User::where('id',Auth::id())->update([
		'password' => bcrypt($request->password), 
		// 'lname' => $request->lname,
	]);
        return view('company.index');
    }
    function insertjobs(Request $req){
        $newuser = new job;
        $newuser->c_id=Auth::id();
        $newuser->jobtitle = $req->input("jobtitle");
        $newuser->description = $req->input("description");
        $newuser->minimumsalary = $req->input("minimumsalary");
        $newuser->maximumsalary = $req->input("maximumsalary");
        $newuser->experience = $req->input("experience");
        $newuser->qualification = $req->input("qualification");
        $newuser->save();
        return redirect("/manager/comdashboard");
    }
    public function job_view()
    {
        $wordCount = 0;
            $data = job::get();
            if($data->count() > 0)
            {
                return view('user.job-posted', compact('data'));
            } 
    }
    public function view_job()
    {
        $wordCount = 0;
            $data = job::where('c_id', Auth::id())->get();
            if($data->count() > 0)
            {
                return view('company.my-job-post', compact('data'));
            } 
    }
    public function num()
    {
        $wordCount = 0;
            $company_id  =  Company::where('u_id',Auth::id())->first();
            $com_id = $company_id->id;
            $data = job::where('c_id', $com_id)->get();
            $num=$data->count();
            if($data->count() > 0)
            {
                return view('company.index', compact('data'));
            } 
    }
}
