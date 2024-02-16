<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use  App\Http\Controllers\DemoSingleActionController;
use App\Http\Controllers\DemoResourceController;
use App\Http\Controllers\formLogic;
use App\Models\customers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// its demo part routes start...........in two file demo and welcome files.................................................

// Route::get('/', function () {
    //     return view('welcome');
// });

// Route::get('/hello',function(){

//     echo "raj bjaoo";
// });


// Route::get('/demo/{name}/{id?}',function($name,$id=null){
    //     $data = compact('name','id');
//     return view("demo")->with($data);
// });

// its demo part routes end............................................................




// its file view with @yield(),include,extends and section part  files-- in layout folder practice............................................................



// Route::get('/',function(){
//     return view('layout/home');
// });

// Route::get('/about',function(){
//     return view('layout/about');
// });





//end part of viewing............................................................


// start controllers --------------------


// first method to implement to call controller function---

// basic controller routes----

// [classname::class ,'function name in controllers files maked']
// Route::get('/home',[DemoController::class,'home']);
// // Route::get('/about',[DemoController::class,'about']);

// // old 1 laravel me call karne ka method-----
// Route::get('/about','App\Http\Controllers\DemoController@about');

// // singleActioncontroller routes----
// Route::get('/raj', DemoSingleActionController::class);// inclde always controller files in routes.

// // Resource controller routes -----

// Route::resource('/',DemoResourceController::class);

//end controllers --------------------


// Make a form then create route...
Route::get('/form',[formLogic::class,'index']);
Route::post('/register',[formLogic::class,'register']);

Route::get('/raj',function(){

    // select query likhne ka tarika

    $customer = customers::all();
    echo "<pre>";
    print_r($customer->toarray());

});
