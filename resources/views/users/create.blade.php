
@include("top")
@include("navBar")
@include("flashDisplay")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Usuários", "route"=>"users.index"],
    ["name"=>"Criar Usuário", "route"=>"users.create"],
  ]])

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Cadastrar Novo Usuário</h4>
       <form class="m-auto"  method="POST" action='{{route("users.create")}}'>
        @csrf
       <label for="nome">Nome:</label>
        <input required type="text" class="textInput my-2" name="nome" placeholder="Seu Nome" />
        
        <label for="email">Email:</label>
        <input required type="text" class="textInput my-2" name="email" placeholder="seu.nome@3esolucoes.com.br" />
        
        <label for="email">Senha:</label>
        <input required type="password" class="textInput my-2" name="senha" placeholder="Sua Senha" />
        
        <label for="link">Nível de acesso</label>
        <select required class="textInput form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="nivelAcesso">
          <option selected>Abrir Menu</option>
          <option value="Observador">Observador</option>
          <option value="Comum">Comum</option>
          <option value="Admin">Admin</option>
        </select>
        
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Cadastrar</button>
        </div>

      </form>
    </div>
  </div>
</div>
@include("bottom")

    


