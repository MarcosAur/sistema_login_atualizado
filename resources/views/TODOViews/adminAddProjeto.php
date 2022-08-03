<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-4">
    <a class="d-inline">Admin</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i> Projetos</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i> Novo Projeto</a>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Cadastrar Novo Projeto</h4>
       <form class="m-auto">

       <label for="nome">Nome:</label>
        <input type="text" class="textInput my-2" name="nome" placeholder="Seu Nome" />
        
        <label for="hash">Hash:</label>
        <input type="text" class="textInput my-2" name="hash" placeholder="HASHSH" maxlength="6"/>
        
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