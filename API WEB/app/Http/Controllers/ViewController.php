<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
  
    public function getAccueil(){
        return view("accueil");
    }
	
	
    public function getUs(){
        return view("seedit");
    }

   
}
