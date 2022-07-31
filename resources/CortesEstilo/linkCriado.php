<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-5">
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb1.svg" class="img-responsive">
        <a href="#" class="overlay-text centeredText">Deslogado</a>
    </div>
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb2.svg" class="img-responsive" style="margin-left: -10px;">
        <a href="#" class="overlay-text centeredText">Início</a>
    </div>
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb3.svg" class="img-responsive" style="margin-left: -10px;">
        <a href="#" class="overlay-text centeredText">Link Criado</a>
    </div>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Link Criado Com Sucesso </h4>

      <div class="m-auto contentHolder mt-4">
        <div class="textInput mb-0" style="width: 100%;">
          <p class="mr-auto d-inline">www.3e.com/HASHSH/USER</p>
          <button class="btn-secondary-small d-inline float-end"><i class="fas fa-copy"></i></button>
        </div>
        <p class="text-center mb-4">Esse link vai redirecionar para <b>https://www.exemplo.com</b>.</p>
      </div>
    </div>



    <!-- <table class="table mt-4">
      <thead class="p-2">
        <tr>
          <th>Nome</th>
          <th>Projeto</th>
          <th>Criador</th>
          <th>Link Encurtado</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Link Exemplo</td>
          <td>Ecoleta</td>
          <td>Jorge</td>
          <td>https://3e.com.br/HASHSH/user 
            <a href="#"><i class="bi bi-eye-fill"></i></a>
            <a href="#"><i class="bi bi-clipboard-check-fill"></i></a>
          </td>
        </tr>
      </tbody>
    </table> -->
  </div>
</div>
<?php
  include("bottom.php");
?>