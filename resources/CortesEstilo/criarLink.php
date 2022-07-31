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
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Nossos Links </h4>
       <form class="m-auto">

        <label for="link">Insira o Link:</label>
        <input type="text" class="textInput my-2" name="link" placeholder="https://site.3esolucoes.com.br/" />
        
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Encurtar</button>
        </div>

      </form>
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

    


