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
    public function store(Request $request)
{
    usermodel::create([
        'name'  => $request->name,
        'email' => $request->email,
    ]);

    return redirect()->back();
}
public function index()
{
    $users = usermodel::all();
    return view('users.index', compact('users'));
}
public function update(Request $request, $id)
{
    $user = usermodel::findOrFail($id);

    $user->update([
        'name'  => $request->name,
        'email' => $request->email,
    ]);

    return redirect()->back();
}
    public function destroy($id)
{
    usermodel::findOrFail($id)->delete();
    return redirect()->back();
}
function topic()
    {
        return view('topic');
    }
}
