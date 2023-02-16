<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaticController;



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

//// 

////// specify the action //////

// Route::get('/', function () {


//     $params =  request('');
//     /// view predin function in laravel get name and add to it blad.php and requre it///*
//     return 'this page'.$params.'re';

//     return view('welcome');
// });

// Route::get('/tst', function () {


//     $params =  request('test');

//     if (isset($params)){

//         ///// clean the params ////
//         $params = strip_tags($params);
//     }
//     /// view predin function in laravel get name and add to it blad.php and requre it///*
//     return 'this page   '.$params;

//     // return view('test');
// });

/// '/{test}' == params and ' ?'  is option ////

// Route::get('/test/{test?}', function ($test = null) {



//     if (isset($test)){

//         ///// clean the params ////
//         $params = strip_tags($test);
//     }
//     /// view predin function in laravel get name and add to it blad.php and requre it///*
//     return 'this page   '.$test;

//     // return view('test');
// });




// Route::get('/',[StaticController::class,'index'] );
Route::get('/test',[StaticController::class,'test'] );
Route::get('/about',[StaticController::class,'about'] );

Route::get('/',[pagesController::class,'index'] );

// Route::resource('/blog',StaticController::class);
Route::resource('/blog',App\Http\Controllers\PostsController::class);







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
