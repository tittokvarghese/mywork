<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use DB;

class DatasController extends Controller
{

public function destroy($id) {

    $blog = DB::table('users_data')->where('uid',$id)->delete();

    return redirect("data");

}



   
    public function home()
    {
	$title='Home';
        //return view('myhome',compact("title"));
      //  return view('myhome')->with("name",$title);
		
		$users = DB::table('users_data')->select('uid','name','rollno')->get();
    return view('myhome', compact('users'));
		
    }
	
	
}
