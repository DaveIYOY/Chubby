<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputNameController extends Controller
{
    public function showView(){
        return view('inputName');
    }
    public function showName(Request $request){
          $name =$request->input('inputName');
          return view("inputName", array("name"=>$name));
    }
}      

          