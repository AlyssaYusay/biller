<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\User;
use Illuminate\Http\Request;
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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/pay','billController@pay');
// Route::get('/home/quick',function(){
// 	return view('quick');
// });
Route::get('/home/paypal',function(){
	return view('paypal');
});
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin/data','UserController@data')->name('data');

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::post('/admin/store','billController@store')->name('admin.store');
Route::post('/admin/updaterate','billController@updaterate')->name('admin.updaterate');

Route::get('/admin/data',function(){
	return view('data');
});


Route::post('/home/pdf','billController@pdf')->name('home.pdf');

Route::post('/login', 'Auth\LoginController@login')->name('admin.login');




Route::get('/admin/data', function () {
    return view('data')->with('users', User::all());
})->name('data');

Route::post('/deleteuser',
    [UserController::class, 'delete']
)->name('deleteuser');

Route::post('updateuser',
    [UserController::class, 'update']
)->name('updateuser');

Route::get('/admin/userupdate/{id}', function($id) {
    return view('userupdate')->with('user', User::find($id));
})->name('userupdate');

