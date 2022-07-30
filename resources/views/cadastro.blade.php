<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form id="formulario_de_acesso" method="POST" action='{{route("efetuarCadastro")}}'>
        @csrf
        <div id="div_nome">
            <label for="nome">Informe seu nome:</label>
            <input required id="nome" name="nome" type="text">
        </div> <!-- Fim da div de nome -->
        <div id="div_email">
            <label for="email">Informe seu email:</label>
            <input required id="email" name="email" type="email">
        </div> <!-- Fim da div de email -->
        <div id="div_senha">
            <label for="senha">Informe sua senha:</label>
            <input required id="senha" name="senha" type="password">
        </div> <!-- Fim da div de senha -->
        <div>
            <button type="submit">Cadastrar</button>
        </div>
        <div>
            <a href="{{route('login')}}">Já tem conta? Faça Login</a>
        </div>
    </form> <!-- Fim do formulário de acesso -->
</body>
</html>

@if (isset($_COOKIE['error']))
    <h2>
        Error: <?php echo $_COOKIE['error']; ?>
    </h2>
@endif