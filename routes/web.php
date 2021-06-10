<?php

use App\Http\Controllers\UserController;
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


Route::get("/",[UserController::class,'showhome']);
Route::get("form",[UserController::class,'formView']);
Route::post("add",[UserController::class,'addData']);
Route::get("edit/{id}",[UserController::class,'editData']);
Route::post("modify/{id}",[UserController::class,'update']);
Route::get("delete/{id}",[UserController::class,'deleteData']);