<?php

use App\Http\Controllers\myController;
use App\Http\Controllers\myDemo;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homepage');
});

//------ return view page--------//

Route::get('/home',function(){
    return view('homepage');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});


// basic route
//--------------Direct hit url---------//
// Route::get('/about',function(){
//     return "About Page Route";
// });

//-------- url will receive get method do not support post method-----//
// Route::get('/contact',function(){
//     return "<h1>Contact Page Route</h1>";
// });
//--------------url hit the open the page-----//

//------- Routing with Controllers-------//

Route::get('/',[myController::class,'homePage']);

Route::get('/about',[myController::class,'aboutPage']);

Route::get('/contact',[myController::class,'contactPage']);

Route::get('/calc',[myController::class,'calc']);

//--------- Basic Routing with Controllers and single parameter

Route::get('/',[myDemo::class,'homePage']);
Route::get('/about/{learnwithfiz}',[myDemo::class,'aboutPage']);
Route::get('/contact/{id}',[myDemo::class,'contactPage']);

//--------- Routing with controllers with multiple parameter

Route::get('/studentProfile/{id}/{stuName}/{dept}',[myDemo::class,'History']);

Route::get('/home',[myDemo::class,'homePage2']);

//------------------------------------------------------//






