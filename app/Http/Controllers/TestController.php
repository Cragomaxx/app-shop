<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome(){
    	return view('welcome');
    }




    // public function sumar(){

    // 	$a = 10;
    // 	$b = 5;
    // 	$c = $a + $b;
    // 	echo "La suma es: $c";
    // }
    // public function prueba(){
    // 	return view('prueba');
    // }
}
