<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-4">
    <a class="d-inline">Admin</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Usuários</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Cadastrar Usuário</a>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Cadastrar Novo Usuário</h4>
       <form class="m-auto">

       <label for="nome">Nome:</label>
        <input type="text" class="textInput my-2" name="nome" placeholder="Seu Nome" />
        
        <label for="email">Email:</label>
        <input type="text" class="textInput my-2" name="email" placeholder="seu.nome@3esolucoes.com.br" />
        
        <label for="link">Nível de acesso</label>
        <select class="textInput form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <option selected>Abrir Menu</option>
          <option value="1">Observador</option>
          <option value="2">Comum</option>
          <option value="3">Admin</option>
        </select>
        
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Cadastrar</button>
        </div>

      </form>
    </div>
  </div>
</div>
<?php
  include("bottom.php");
?>

    


