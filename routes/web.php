<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testc;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('registration',[Testc::class,'my_registration']);
Route::post('reg_ins',[Testc::class,'reg_ins']);
Route::get('my_login',[Testc::class,'my_login']);
Route::post('lc',[Testc::class,'lc']);
Route::get('secureadmin',[Testc::class,'secureadmin'])->middleware('auth','admin');
Route::get('securecustomer',[Testc::class,'securecustomer'])->middleware('auth');

Route::get("/ckrole",[Testc::class,'ckrole'])->middleware('auth');

Route::get('my-logout',[Testc::class,'my_logout']);

Route::get('dash-admin',[Testc::class,'dash_admin']);

require __DIR__.'/auth.php';

