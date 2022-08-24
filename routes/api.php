<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidateProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductProfileController;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/students',function(){
//     return 'all students data record';
// });
// public Routes
// Route::get('/students',[StudentController::class,'index']);
// Route::get('/students/{id}',[StudentController::class,'show']);
// Route::post('/students',[StudentController::class,'store']);
// Route::put('/students/{id}',[StudentController::class,'update']);
// Route::delete('/students/{id}',[StudentController::class,'destroy']);
// Route::get('/students/search/{city}',[StudentController::class,'search']);

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/resume',[CandidateProfileController::class,'profile_save']);
Route::get('/list',[CandidateProfileController::class,'profile_list']);

//product_api
// Route::post('/product',[ProductController::class,'product_save']);
// Route::get('/product',[ProductController::class,'product_list']);

Route::post('/product',[ProductController::class,'product_save']);
Route::get('/prod',[ProductProfileController::class,'productlist']);



// Route::resource('students',StudentsController::class);



//Protected Routes
// Route::middleware('auth:sanctum')->get('/students',[StudentController::class,'index']);
// Route::middleware('auth:sanctum')->get('/students/{id}',[StudentController::class,'show']);
// Route::middleware('auth:sanctum')->post('/students',[StudentController::class,'store']);
//protected group middleware
Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/students',[StudentController::class,'index']);
    Route::get('/students/{id}',[StudentController::class,'show']);
    Route::post('/students',[StudentController::class,'store']);
    Route::put('/students/{id}',[StudentController::class,'update']);
    Route::delete('/students/{id}',[StudentController::class,'destroy']);
    Route::get('/students/search/{city}',[StudentController::class,'search']);
    Route::post('/logout',[UserController::class,'logout']);


});
Route::middleware('auth:sanctum')->get('/user',function
    (Request $request){
        return $request->user();
    });

 //Curd Operation
  Route::resource(name:'apiCrud', controller: \App\Http\Controllers\CrudOperationsController::class);
    
