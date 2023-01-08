<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use App\Models\job;
use App\Models\apps;
use App\Models\Candidate;
use App\Models\User;
use App\Models\Company;
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
    public function show_jobs()
    {
        $wordCount = 0;
            // $data = job::first();
            $data = job::select(
                "jobs.jobtitle", 
                "jobs.created_at",
                "companies.companyname as com_name"
            )
            ->join("companies", "companies.u_id", "=", "jobs.c_id")
            ->get();
            if($data->count() > 0)
            {
                return view('admin.active-jobs', compact('data'));
            } 
    }
    public function show_company()
    {
        $wordCount = 0;
        $data = Company::first();
        if($data->count() > 0)
        {
            return view('admin.companies', compact('data'));
        } 
    }
    public function candidates()
    {
        $wordCount = 0;
            $data = Candidate::first();
            if($data->count() > 0)
            {
                return view('admin.applications', compact('data'));
            } 
    }
}
