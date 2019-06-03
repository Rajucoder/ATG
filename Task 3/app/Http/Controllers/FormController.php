<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Validator,Redirect,Response;
use App\Contact;

class FormController extends Controller
{
    //
	public function index()
    {
        return view('ajax-form');
    }       
 
    public function store(Request $request)
    {  
		$grocery = new Contact();
        $grocery->name = $request->name;
        $grocery->email = $request->email;
        $grocery->mobile_number = $request->mobile_number;
		
		
        $grocery->save();
		$arr = array('msg' => 'Successfully submit form using ajax', 'status' => true);
        return Response()->json($arr);
       
    }
}
