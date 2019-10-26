<?php

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

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', function () {
    return view('home');
});

Route::post('/login', function (){
    return view('auth.login');
});

Route::post('/login', 'UserController@login');


Route::get('/timetable', function () {
    return view('admin.TimetableUpload');
});

Route::post('/timetable', 'TimetableController@extract');

Route::get('/exam', function () {
    return view('admin.ExamUpload');
});

Route::post('/exam', 'ExamController@extract');
