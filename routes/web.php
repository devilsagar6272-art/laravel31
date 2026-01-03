<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontrollers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/abtract',[usercontrollers::class,'abtract'])->name('abtract');
Route::get('/trait',[usercontrollers::class,'trait'])->name('trait');
Route::get('/methodoverring',[usercontrollers::class,'methodoverring'])->name('methodoverring');
Route::get('/interface',[usercontrollers::class,'interface'])->name('interface');
Route::get('/insert',[usercontrollers::class,'insert'])->name('insert');
