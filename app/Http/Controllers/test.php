<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function test()
    {
        $name = "LODDssss";
        return view('gallery',array("name"=>$name));
    }
}
