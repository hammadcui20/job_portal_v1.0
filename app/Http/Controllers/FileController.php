<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\job;
use App\Models\apps;
use App\Models\Company;
use App\Models\User;
use Auth;

class FileController extends Controller
{
     public function index()
    {
        return view('user/cv');
    }
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf|max:2048',
        ]);
        $newuser = new Candidate;
        $filename = Auth::id();
        $ext= $request->file->getClientOriginalExtension();   
        $request->file->move(public_path('cvs'), $filename.'.'.$request->file->getClientOriginalExtension());
        $newuser->pdf=$filename.'.'.$request->file->getClientOriginalExtension();
        // $newuser=$filename.'.'.$request->file->getClientOriginalExtension();
        // $newuser->save();
        Candidate::where('u_id',Auth::id())->update([
           'pdf' => $newuser->pdf, 
        ]);
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file', $filename);
        
    }
    public function download($u_id)
    {
        $path=public_path('cvs/'.$u_id.'.pdf');
        return response()->download($path);
    }
    
}
