<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\candidatoController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


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

//travando apenas o método de candidato
Route::get('/',function (){
    return view('front.index');
})->name('front.index');

//Route::get('/candidato', function (){
//    return  view('admin.candidato');
//})->name('candidato');

Route::get('/contato', function () {
    return view('front.contato');
})->name('front.contact');

Route::get('/sobre', function () {
    return view('front.sobre');
})->name('front.about');

Route::get('/painel', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/painel/registro', function () {
    return view('admin.registro');
})->name('admin.register');

Route::get('/laravel', function () {
    return view('welcome');
});
Route::get('/painel/login', function (){
    return view('admin.login');
})->name('admin.login');

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/painel/admin', [AuthController::class, 'dashboard'])->name('admin.home');
Route::get('/painel/admin/usuarios', [UserController::class, 'show'])->name('admin.users');
Route::get('/painel/admin/comite/pautas',[PostController::class, 'index'])->name('admin.pautas');
Route::get('/painel/admin/comite/pautas/cadastrar',[PostController::class, 'create'])->name('admin.pauta.cadastro');
Route::post('/painel/admin/comite/pautas/cadastrar',[PostController::class, 'store'])->name('pauta.store');


//Route::resource('/painel/admin/comite/pautas'.[PostController::class,'index'])->name('admin.pautas');

Route::get('/painel/logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::post('/painel/login/do', [AuthController::class, 'login'])->name('admin.login.do');
Route::post('/painel/registro/do', [AuthController::class, 'registrar'])->name('admin.register.do');

