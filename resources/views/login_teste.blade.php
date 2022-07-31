<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form id="formulario_de_acesso" method="POST" action='{{route("validarLogin")}}'>
        @csrf
        <div id="div_email">
            <label for="email">Informe seu email:</label>
            <input id="email" name="email" type="email">
        </div> <!-- Fim da div de email -->
        <div id="div_senha">
            <label for="senha">Informe sua senha:</label>
            <input id="senha" name="senha" type="password">
        </div> <!-- Fim da div de senha -->
        <div>
            <button type="submit">Acessar</button>
        </div>
        <div>
            <a href='{{route("cadastro")}}''>Não tem conta? Cadastre-se</a>
        </div>
    </form> <!-- Fim do formulário de acesso -->
</body>
</html>
@if (isset($_COOKIE['error']))
    <h2>
        Error: <?php echo $_COOKIE['error']; ?>
    </h2>
@endif