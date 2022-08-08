@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Usuários", "route"=>"users.index"],
    ["name"=>"Editar Usuário", "route"=>"users.index"],
  ]])

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Editar Usuário</h4>
       <form class="m-auto" action="{{ route('users.edit', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" class="textInput my-2" name="nome" value="{{$user->nome}}" />

        <label for="email">Email:</label>
        <input type="text" class="textInput my-2" name="email" value="{{$user->email}}" />
        
        <label for="link">Nível de acesso</label>
        <select required class="textInput form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="nivelAcesso">
          <option value="Observador" {{($user->nivelAcesso == "Observador" ? "selected" : "")}}>Observador</option>
          <option value="Comum" {{($user->nivelAcesso == "Comum" ? "selected" : "")}}>Comum</option>
          <option value="Admin" {{($user->nivelAcesso == "Admin" ? "selected" : "")}}>Admin</option>
        </select>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Atualizar</button>
        </div>

      </form>
    </div>
  </div>
</div>

@include("bottom")