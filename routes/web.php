<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\GalleryController;

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
    return view('index');
});
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout');
Route::get('login','\App\Http\Controllers\Auth\LoginController@login');

Auth::routes();
Route::get('/',[PagesController::class,'index']);
Route::get('/admin',[HomeController::class,'index']);

Route::get('faculty',[FacultyController::class,'index']);
Route::get('add-faculty',[FacultyController::class,'create']);
Route::post('add-faculty',[FacultyController::class,'store']);
Route::get('edit-faculty/{id}',[FacultyController::class,'edit']);
Route::put('update-faculty/{id}',[FacultyController::class,'update']);
Route::delete('delete-faculty/{id}',[FacultyController::class,'destroy']);




// Route::resource('faculty','App\Http\Controllers\FacultyController');
Route::get('birthday',[BirthdayController::class,'index']);
Route::get('add-birthday',[BirthdayController::class,'create']);
Route::post('add-birthday',[BirthdayController::class,'store']);
Route::get('edit-birthday/{id}',[BirthdayController::class,'edit']);
Route::put('update-birthday/{id}',[BirthdayController::class,'update']);
Route::delete('delete-birthday/{id}',[BirthdayController::class,'destroy']);



Route::get('gallery',[GalleryController::class,'index']);
Route::get('add-gallery',[GalleryController::class,'create']);
Route::post('add-gallery',[GalleryController::class,'store']);
Route::get('edit-gallery/{id}',[GalleryController::class,'edit']);
Route::put('update-gallery/{id}',[GalleryController::class,'update']);
Route::delete('delete-gallery/{id}',[GalleryController::class,'destroy']);

