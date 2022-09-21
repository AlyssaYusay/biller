<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\User;
use App\Admin;
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



// users
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/pay','billController@pay');

Route::get('/home/paypal',function(){
	return view('paypal');
});

Route::post('/home/pdf','billController@pdf')->name('home.pdf');

Route::post('/login', 'Auth\LoginController@login')->name('user.login');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin/data','UserController@data')->name('data')->middleware(['auth']);

Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin/data', function () {
    return view('data')->with('users', User::all());
})->name('data');


Route::get('/admin/userupdate/{id}', function($id) {
    return view('userupdate')->with('user', User::find($id));
})->name('userupdate');

    
Route::post('/deleteuser',
[UserController::class, 'delete']
)->name('deleteuser');

Route::post('updateuser',
[UserController::class, 'update']
)->name('updateuser');

// Route::get('/admin/userbill/{id}', 'UserBillController@show')->name('userbill');
Route::post('/admin/userbill/{id}',
[UserBillController::class, 'create']
)->name('userbill');

Route::get('/admin/userbill/{id}', function($id) {
    return view('userbill')->with('user', User::find($id));
})->name('userbill');

Route::post('/admin/store','billController@store')->name('admin.store');
Route::post('/admin/updaterate','billController@updaterate')->name('admin.updaterate');



// admin
// Route::middleware(['auth', 'AdminMiddleware'])->group(function () {

// });