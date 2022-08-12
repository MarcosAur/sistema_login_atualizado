<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CadastroController;
use App\Models\Usuario;

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
})->name("index");

Route::get('/deslogar', function () {
    session()->forget('userId');
    session()->forget('nivelAcesso');
    return redirect('/login');
})->name("deslogar");

Route::get('/login', [LoginController::class,'index'])->name("login")->middleware("isNotUser");

Route::post('/login', [LoginController::class,'logar'])->name("validarLogin")->middleware("isNotUser");

Route::get('/cadastro',[CadastroController::class,'index'])->name("cadastro");
// ->middleware("isAdminUser");

Route::post('/cadastro',[CadastroController::class,'cadastrar'])->name("users.create");

Route::resource('links', LinksController::class);
Route::get('/links/delete/{id}',[LinksController::class,'delete'])->name("links.delete");
Route::post('/links/search',[LinksController::class,'filtrarLinks'])->name("links.filtrarLinks");

Route::resource('project', ProjectController::class);

Route::get('/project/delete/{id}',[ProjectController::class,'delete'])->name("project.delete");

// Rotas temporarias, quando mudar o sistema de login, mover para o controller e fazer ajustes para funcionar corretamente
Route::get("/users", function () {
    $users = usuario::all();
    return view("users.index")->with("curTab", "usuarios")->with("users", $users);
})->name("users.index");

Route::get("/users/{id}/edit", function ($id) {
    $user = usuario::where("id", $id)->first();
    if($id == session()->get("userId")){
        return view("users.edit")->with("user", $user)->with("curTab", "perfil");
    }else{
        return view("users.edit")->with("user", $user);
    }
})->name("users.edit");

Route::get("/users/delete/{id}", function ($id) {
    $user = usuario::where("id", $id)->first();
    return view("users.delete")->with("user", $user);
})->name("users.delete");

Route::get("/solicitations", function (){
    return view("solicitations.index")->with("curTab", "solicitacoes");
})->name("solicitation.index");

Route::get("/solicitations/create", function (){
    return view("solicitations.create");
})->name("solicitation.create");

Route::get("/solicitations/{id}", function ($id){
    return view("solicitations.show");
})->name("solicitation.show");