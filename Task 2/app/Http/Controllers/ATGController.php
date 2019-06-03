<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
use User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Log;
use IlluminateSupportFacadesLog;

class ATGController extends Controller
{
	
	public function show(Request $request){
		
		$name = $request->input('name');
		$Email = $request->input('Email');
		$pin = $request->input('pin');
		$checklogin  = DB::table('login4')->where(['email'=>$Email])->get();
		if(count($checklogin)>0){
			return Redirect::to('/')->with('message1','Error!');
		}
		else{
		$data = array('name'=>$name,'email'=>$Email,'pincode'=>$pin);
		DB::table('login4')->insert($data);
		Log::info('Email Sent');
		return Redirect::to('/')->with('success', true)->with('message','Success!');
			}
		}
		
	
	
}
?>