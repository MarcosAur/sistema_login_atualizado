<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bem-vindo</title>
    </head>
    <body>

        <h1>Bem vindo, <?php 
            if (isset($_COOKIE['username'])){
                echo $_COOKIE['username'];
            }else{
                echo "Faça login para aproveitar todas as funcionalidades do site";
            }
            ?></h1>
        <a href="{{route('login')}}"><button>Voltar para tela de login</button></a>
        
    </body>
</html>
