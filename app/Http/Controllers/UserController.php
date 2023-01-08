<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use Validator;
// use Auth;
use DataTables;
use App\Models\User;
use App\Models\Candidate;
use App\Models\Company;
use App\Models\job;

class UserController extends Controller
{
    // public function index(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $data =Candidate::select('fname','email');
    //         return Datatables::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function($row){
       
    //                         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
      
    //                         return $btn;
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //     }
    //     return view('users');
    // }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = job::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('approved', function($row){
                         if($row->approved){
                            return '<span class="badge badge-primary">Yes</span>';
                         }else{
                            return '<span class="badge badge-danger">No</span>';
                         }
                    })
                    ->filter(function ($instance) use ($request) {
                        if ($request->get('approved') == '0' || $request->get('approved') == '1') {
                            $instance->where('approved', $request->get('approved'));
                        }
                        if (!empty($request->get('search'))) {
                             $instance->where(function($w) use($request){
                                $search = $request->get('search');
                                $w->orWhere('jobtitle', 'LIKE', "%$search%")
                                ->orWhere('experience', 'LIKE', "%$search%")
                                ->orWhere('qualification', 'LIKE', "%$search%");
                            });
                        }
                    })
                    ->rawColumns(['approved'])
                    ->make(true);
        }
        
        return view('users');
    }
    public function read(Request $request)
    {
   
        /* Current Login User Details */
        $user = auth()->user();
        var_dump($user);
      
        /* Current Login User ID */
        $userID = auth()->user()->id; 
        var_dump($userID);
          
        /* Current Login User Name */
        $userName = auth()->user()->name;
        var_dump($userName);
        /* Current Login User Email */
        $userEmail = auth()->user()->email; 
        var_dump($userEmail);

    }
}
