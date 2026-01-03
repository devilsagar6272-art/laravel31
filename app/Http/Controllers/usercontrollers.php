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
    function insert(Request $request)
    {
        $data = usermodel::create([
        'name' => 'uyiuiyu',
        'email' => 'iuouuijfghfdds'
        ]);
        dd($data);
    }
}
