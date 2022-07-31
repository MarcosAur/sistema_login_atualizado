
  @include("top");
  @include("navBar");


<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-5">
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb1.svg" class="img-responsive">
        <a href="#" class="overlay-text centeredText">Deslogado</a>
    </div>
    <div class="breadCrumb1 breadCrumb d-inline">
        <img src="/imgs/breadCrumb2.svg" class="img-responsive" style="margin-left: -10px;">
        <a href="#" class="overlay-text centeredText">Login</a>
    </div>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Fazer Login</h4>
       <form class="m-auto">

        <label for="email">Email:</label>
        <input type="email" class="textInput my-2" name="email" placeholder="seuEmail@3esolucoes.com.br" />
        
        <label for="password">Senha:</label>
        <input type="password" class="textInput my-2" name="password" placeholder="seuEmail@3esolucoes.com.br" />
        
        <div class="d-flex justify-content-center flex-column align-items-center mt-5">
          <a href="#" class="simpleLink">Esqueci minha senha.</a>
          <button type="submit" class="btn-primary px-5 mb-2 growHover">Logar</button>
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

  @include("bottom");
