<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\GerenciarUsuarioService;

class LoginController extends Controller
{
    function index(){
        session(['curTab' => "logar"]);
        return view("login");
    }

    function logar(){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $statusLogin = GerenciarUsuarioService::validarLogin($email, $senha);

        if ($statusLogin[0]) {
            setcookie('username',$statusLogin[1],time() + 84600 , '/');
            session(['userId' => $statusLogin[2]]);
            session(['nivelAcesso' => $statusLogin[3]]);
            return redirect('/welcome');
        }else{
            setcookie('error',"Usuario ou senha incorretas",time() + 10 , '/');
            return redirect('/login');
        }
    }
}
