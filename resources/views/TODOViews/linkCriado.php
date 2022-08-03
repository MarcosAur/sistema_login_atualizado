<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-4">
    <a class="d-inline">Delogado</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Início</a>
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
  </div>
</div>
<?php
  include("bottom.php");
?>