<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    //se tiver logado como admin, vai pra tela de crud
    //se tiver logado como Usuário Comum, vai pra tela com os próprios links
    //se tiver logado como Usuário Observador, vai pra tela de ver todos os links (sem poder editar)
    return redirect("login");
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class,'index'])->name("login");

Route::post('/login', [LoginController::class,'logar'])->name("validarLogin");

Route::get('/cadastro',[CadastroController::class,'index'])->name("cadastro");

Route::post('/cadastro',[CadastroController::class,'cadastrar'])->name("efetuarCadastro");

