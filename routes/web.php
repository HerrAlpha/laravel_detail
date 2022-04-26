<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BmwController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [BmwController::class,'view'])->name('view');
Route::get('/add', [BmwController::class,'index'])->middleware('auth', 'admin');
Route::post('/proses', [BmwController::class,'proses']);
Route::patch('/update/{id}', [BmwController::class,'update'])->name('update');
Route::get('/detail/{id}', [BmwController::class,'detail'])->name('detail');
Route::get('/delete/{id}', [BmwController::class,'delete'])->middleware('auth', 'admin');
Route::get('/edit/{id}', [BmwController::class,'edit'])->middleware('auth', 'admin');




Route::get('login', 'App\Http\Controllers\AuthController@index')->name('login');
// Route::get('register', 'App\Http\Controllers\AuthController@register')->name('register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:editor']], function () {
        Route::resource('editor', AdminController::class);
    });
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
