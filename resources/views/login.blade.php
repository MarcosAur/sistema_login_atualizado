
@include("top")
@include("navBar")


<div class="container-fluid content">

    <!-- BreadCrumb -->
    <div class="breadCrumbHolder my-4">
      <a class="d-inline">Deslogado</a>
      <a class="d-inline"><i class="fas fa-angle-right"></i>Início</a>
    </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Fazer Login</h4>
       <form class="m-auto" method="POST" action='{{route("validarLogin")}}'>
        @csrf
        <label for="email">Email:</label>
        <input type="email" class="textInput my-2" name="email" placeholder="seu.email@3esolucoes.com.br" />
        
        <label for="password">Senha:</label>
        <input type="password" class="textInput my-2" name="senha" placeholder="Sua senha" />
        
        <div class="d-flex justify-content-center flex-column align-items-center mt-5">
          <a href="#" class="simpleLink">Esqueci minha senha.</a>
          <button type="submit" class="btn-primary px-5 mb-2 growHover">Logar</button>
        </div>

      </form>
    </div>
  </div>
</div>

@include("bottom")
