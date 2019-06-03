<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Redirect;
use User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\data;
use Log;
use IlluminateSupportFacadesLog;

class WebServicesController extends Controller
{
			
		 public function create(Request $request)
		 {
			 $data = new data();
			 $data->name = $request->input('name');
			$data->email = $request->input('email');
			$data->pincode = $request->input('pincode');
			$checklogin  = DB::table('login4')->where(['email'=>$data->email])->get();
		if(count($checklogin)>0){
			print_r('0');
			print_r("\n");
			print_r('Error');
		}
		else{
			
			$data->save();
			Log::info('Email Sent');
			print_r('1');
			print_r("\n");
			print_r('Email Sent');
		}
		
		} 
		 
	
	
}
?>