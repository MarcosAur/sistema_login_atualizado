
@include("top")
@include("navBar")
@include("flashDisplay")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Projetos", "route"=>"project.index"],
    ["name"=>"Novo Projeto", "route"=>"project.create"]
    ]])

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Cadastrar Novo Projeto</h4>
       <form class="m-auto" method="POST" action='{{route("project.store")}}'>
        @csrf
       <label for="nome">Nome:</label>
        <input type="text" class="textInput my-2" name="nome" placeholder="Nome do Projeto" value="{{old('nome')}}"/>
        @error('nome')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="hash">Hash:</label>
        <input type="text" class="textInput my-2" name="hash" placeholder="HASHSH" maxlength="6" value="{{old('hash')}}"/>
        @error('hash')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="d-flex justify-content-center">
          <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Cadastrar</button>
        </div>

      </form>
    </div>
  </div>
</div>
@include("bottom")