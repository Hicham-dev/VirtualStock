<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
class TestController extends Controller
{
    function getTest(){
         $tests = Test::all();
         foreach ($tests as $test){
            echo $test->name."<br>";
         }         
    }
}
