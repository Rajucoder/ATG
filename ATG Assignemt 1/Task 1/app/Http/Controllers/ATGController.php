<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
use User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ATGController extends Controller
{
	
	public function show(Request $request){
		
		$name = $request->input('name');
		$Email = $request->input('Email');
		$pin = $request->input('pin');
		$checklogin  = DB::table('login')->where(['Email_id'=>$Email])->get();
		if(count($checklogin)>0){
			return Redirect::to('/')->with('message1','Already registered!');
		}
		else{
		$data = array('Name'=>$name,'Email_id'=>$Email,'Pincode'=>$pin);
		DB::table('login')->insert($data);
		return Redirect::to('/')->with('success', true)->with('message','Successfully registered!');
			}
		}
		
	
	
}
?>