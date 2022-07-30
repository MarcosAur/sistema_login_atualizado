<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Usuario;

class GerenciarUsuarioService extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public static function validarLogin($email,$senha){
        //To-Do: buscar usuário no banco
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuario = Usuario::where("email",$email)->where("senha",$senha)->get();


        //To-Do: verificar se o array é vazio
        if(count($usuario) != 0){
            return [true,$usuario[0]->nome];
        }else{
            return [false, "Não de certo"];
        }
    }

    public static function cadastrarUsuario($nome, $email, $senha){
        $usuario = new \App\Models\Usuario();
        $usuario->nome = $nome;
        $usuario->email = $email;
        $usuario->senha = $senha;

        $usuarioJaCadastrado = Usuario::where("email",$email)->get();

        if (count($usuarioJaCadastrado) != 0) {
            return [false,"Usuário já existe"];
        }else{
            $sucesso = $usuario->save(); //Query no banco
            if($sucesso){
                return [true];
            }else{
                return [false, 'Erro no banco de dados'];
            }
        }

        

    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
