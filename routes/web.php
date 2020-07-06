<?php

use Illuminate\Support\Facades\Auth;
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
    // return view('backend.dashboard.index');
    return redirect()->route('admin.show_login');
});


Route::middleware(['auth'])->group(function(){
    Route::get('admin/dashboard', function () {
        return view('backend.dashboard.index');
    })->name('admin.dashboard');

    Route::get('logout', 'Auth\LoginController@logout')->name('admin.logout');
});

Route::get('admin', 'Auth\LoginController@showLoginForm')->name('admin.show_login');
Route::post('login', 'Auth\LoginController@login')->name('admin.login');
