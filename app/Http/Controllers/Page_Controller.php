<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Page_Controller extends Controller {

	public function about(){
		
		$name="Oscar <span style='color: red;'>Simba</span>";
		
		//passing single value to view
		//return view("pages.about")->with('name',$name); or return view("pages.about",compact('name'));

		//passing multiple value to view
		/*return view("pages.about")->with([
           'first'=>'Oscar',
           'last'=>'Simba'
			]);*/
   
     $names=[
           'first'=>'Oscar',
           'last'=>'Simba'
			];
			$people=[];
     $people=['Nancy Kamba', 'Jambo Mwanza', 'Lara Vel', 'Code Igniter'];
     return view('pages.about',compact('people'))->with($names);

	}

	public function contact(){

		return view('pages.contact');

	}

}
