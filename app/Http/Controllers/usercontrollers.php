<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontrollers extends Controller
{
    function insert()
    {
        return view('welcome');
    }
    function trait()
    {
        return view('trait');
    }
    function methodoverring()
    {
        return view('methodoverring');
    }
    function interface()
    {
        return view('interface');
    }
}
