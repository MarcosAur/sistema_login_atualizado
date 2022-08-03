<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-4">
    <a class="d-inline">Usuário</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Perfil</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Editar Senha</a>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Editar Senha</h4>
       <form class="m-auto">
        
        <label for="password">Senha Antiga:</label>
        <input type="password" class="textInput my-2" name="oldPass" value="VALOR" />
        
        <label for="password">Nova Senha:</label>
        <input type="password" class="textInput my-2" name="newPass" value="VALOR" />

        <label for="password">Confirmar Nova Senha:</label>
        <input type="password" class="textInput my-2" name="repeatNewPass" value="VALOR" />


        
        <div class="d-flex justify-content-center flex-column align-items-center mt-5">
          <button type="submit" class="btn-primary px-5 mb-2 growHover">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
  include("bottom.php");
?>