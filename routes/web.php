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
    $nivelAcesso = session()->get("nivelAcesso");
    if($nivelAcesso == ""){
        //se não tiver logado, tela de registrar link normal.
        session(['curTab' => "inicio"]);
        return redirect("/novoLink");
    }
    //se tiver logado redireciona pra a lista de links
    return redirect("links.show");// TODO passar todos os links
})->name("inicio");

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/novoLink', function () {
    return view('links.create');
})->name("novoLink");

Route::get('/deslogar', function () {
    session()->forget('userId');
    session()->forget('nivelAcesso');
    return redirect('/');
})->name("deslogar");

Route::get('/login', [LoginController::class,'index'])->name("login");

Route::post('/login', [LoginController::class,'logar'])->name("validarLogin");

Route::get('/cadastro',[CadastroController::class,'index'])->name("cadastro");

Route::post('/cadastro',[CadastroController::class,'cadastrar'])->name("efetuarCadastro");

