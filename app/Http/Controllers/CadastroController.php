<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\GerenciarUsuarioService;

class CadastroController extends Controller
{
    public function index(){
        return view('users.create');
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nivelAcesso = $_POST['nivelAcesso'];
        
        $statusDoCadastro = GerenciarUsuarioService::cadastrarUsuario($nome, $email, $senha, $nivelAcesso);

        if($statusDoCadastro[0]) {
            setcookie('username',$nome,time() + 84600 , '/');
            return redirect('/welcome');
        }else{
            $error = $statusDoCadastro[1];
            setcookie('error',$error,time() + 10 , '/');
            return redirect("/cadastro");
        }
        
    }
}
