<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function register(Request $request)
    {

    	$validation = $request->validate([
    		'fname'=> 'required',
    		'lname'=> 'required',
    		'email'=> 'required|email',
    		'password'=> 'required|min:5|max:12',
    		'con_password'=> 'required|min:5|max:12|same:password',

    	]);
    	


    	$fname = $request->input('fname');
    	$lname = $request->input('lname');
    	$email = $request->input('email');
    	$password = $request->input('password');
    	$con_password = $request->input('con_password');

    	$check_email=DB::table('users')->where('email', '=', $email)->first();
    	if($check_email=''){

    	
    	$data= array(
    		'fname'=>$fname,
    		'lname'=>$lname,
    		'email'=>$email,
    		'password'=>$password,
    		'con_password'=>$con_password,
    	);

    	$register = DB::table('users')->insert($data);
    	if($register)
    	{
    		echo "Registration complete";
    	}

    	else{
    		return back();
    	}
    }
    else{
    	echo "Email is already exists";
    }
    }


    function Login()
    {
    	return view('login');
    }


    function Verify(Request $request)
    {
    	$validation = $request->validate([
    		
    		'email'=> 'required|email',
    		'password'=> 'required|min:5|max:12',

    	]);
    	$email = $request->input('email');
    	$password = $request->input('password');

    	$check=DB::table('users')->where('email',$email)->where('password',$password)->first();
    	//dd($check);
    	if($check!='')
    	{
    		return redirect()->route('dashboard');
    	}
    	else{
    		echo "Wrong Credential";
    	}
    }

     function Dashboard()
    {
        $datas=DB::table('users')->get();
        return view('dashboard', compact('datas'));
    }
    

    
}

