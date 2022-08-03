<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\GerenciarUsuarioService;

class LoginController extends Controller
{
    function index(){
        return view("login")->with("curTab", "logar");
    }

    function logar(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $statusLogin = GerenciarUsuarioService::validarLogin($email, $senha);

        //TODO validação
        if ($statusLogin[0]) {
            session(['userId' => $statusLogin[2]]);
            session(['nivelAcesso' => $statusLogin[3]]);
            return redirect()->route('links.index');
        }else{
            setcookie('error',"Usuario ou senha incorretas",time() + 10 , '/');
            return redirect('/login');
        }
    }
}
