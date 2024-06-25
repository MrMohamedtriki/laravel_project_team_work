<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\Models\Admin;
use App\Mail\Websitemail;

class AdminController extends Controller
{
  
    // public function dashboard(){
    //     return view('admin.dashboard');
    // }

    public function dashboard()
{
    $user = Auth::guard('admin')->user(); // Assuming you're using a guard named 'admin'

    if ($user) {
        return view('admin.dashboard', compact('user'));
    } else {
        return redirect()->route('admin.login')->with('error', 'Please login to access the dashboard.');
    }
}

    public function login(){
        return view('admin.login');
    }
    public function login_submit(Request $request){
        echo'jessem sabuya';

        //dd($request->all());
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8',
        ]);
        $check=$request->all();
        $data=[
            'email'=>$check['email'],
            'password'=>$check['password'],

        ];
        if(Auth::guard('admin')->attempt($data)){
            return redirect()->route('admin.produit')->with('success','Login Success');
        }
        else{
            return redirect()->route('admin.login')->with('error','Invalid Credentials');
        }
        //return redirect()->route('admin_dashboard')->with('error','Invalid Credentials');
    }
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success','Logout Success');
    }
}
