<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SignUp;
class SignupController extends Controller
{
    // public function index(){

    //     return view('add-blog-post-form');
    // }
    public function login(){
        return view('login');
   }

   public function store_form(Request $request){
    $userData=SignUp::create([
        'name' => $request->name,
        'ssc_roll' => $request->ssc_roll,
        'ssc_reg' => $request->ssc_reg,
        'ssc_gpa' => $request->ssc_gpa,
        'ssc_passing_year' => $request->ssc_passing_year,
        'ssc_group' => $request->ssc_group,
        'hsc_roll' => $request->hsc_roll,
        'hsc_reg' => $request->hsc_reg,
        'hsc_gpa' => $request->hsc_gpa,
        'hsc_passing_year' => $request->hsc_passing_year,
        'hsc_group' => $request->hsc_group,
    ]);
    return redirect('basic')->with('status', 'User Has been registered');
   }
}
