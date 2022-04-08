<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class Top extends Controller {

    public function show(){
       return view('pages.top');
    }
	
}