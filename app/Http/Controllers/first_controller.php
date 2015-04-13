<?php
namespace App\Http\controllers;
class first_controller extends Controller{

public function index(){
	$data['message']="Hello there. I just passed data to a view in laravel";
	return view('first_view',$data);
}
}