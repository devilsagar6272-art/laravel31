<?php

namespace App\Http\Controllers;
use App\Models\usermodel;
use Illuminate\Http\Request;

class usercontrollers extends Controller
{
    function abtract()
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
    function insert()
{
    usermodel::create([
        'name'  => 'tuutuutut',
        'email' => 'sajjsjjkdskjkjdsj'
    ]);

    $data = usermodel::all();

    return view('insert', compact('data'));
}

}
