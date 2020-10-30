<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\candidatoController;


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

//Route::get('/contato', function () {
//    return view('front.contato');
//})->name('front.contact');
//
//Route::get('/sobre', function () {
//    return view('front.sobre');
//})->name('front.about');
//
//Route::get('/', function () {
//    return view('front.index');
//})->name('front.index');
//
//Route::get('/painel', function () {
//    return view('admin.login');
//})->name('admin.login');
//
//
//Route::get('/painel/registro', function () {
//    return view('admin.registro');
//})->name('admin.register');
//
//Route::get('/laravel', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/painel/admin', [AuthController::class, 'dashboard'])->name('admin.home');
//Route::get('/painel/login', [AuthController::class, 'loginform'])->name('admin.login');
//Route::get('/painel/logou', [AuthController::class, 'logout'])->name('admin.logout');
//Route::post('/painel/login/do', [AuthController::class, 'login'])->name('admin.login.do');

Route::get('/',function (){
    return redirect()->route('candidato');
});

Route::get('/candidato', function (){
    return  view('admin.candidato');
})->name('candidato');
Route::post('/candidato/candidatar', [candidatoController::class, 'candidatar'])->name('candidatar');


