<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CadastroController;

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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return redirect()->route('links.index');
});

Route::get('/deslogar', function () {
    session()->forget('userId');
    session()->forget('nivelAcesso');
    return redirect('/login');
})->name("deslogar");

Route::get('/login', [LoginController::class,'index'])->name("login")->middleware("isNotUser");

Route::post('/login', [LoginController::class,'logar'])->name("validarLogin")->middleware("isNotUser");

Route::get('/cadastro',[CadastroController::class,'index'])->name("cadastro");
// ->middleware("isAdminUser");

Route::post('/cadastro',[CadastroController::class,'cadastrar'])->name("efetuarCadastro");

Route::resource('links', LinksController::class);
Route::resource('project', ProjectController::class);