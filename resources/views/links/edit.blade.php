@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
    @if(session()->get("nivelAcesso") == "Admin")
     @include("breadCrumb", ["paths" => ["Admin", "Links", "Editar Link"]])
    @elseif(session()->get("nivelAcesso") == "Comum")
     @include("breadCrumb", ["paths" => ["Usuário", "Início", "Editar Link"]])
    @endif

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    <p>{{$link->linkOriginal}}</p>
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Editar Link</h4>
       <form class="m-auto">

        <label for="link">Link:</label>
        <input type="text" class="textInput my-2" name="link" value="{{$link->linkOriginal}}" />
        
        <label for="link">Selecione um Projeto</label>
        <select class="textInput form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Abrir Menu</option>
            <option value="1">Projeto A</option>
            <option value="2">Projeto B</option>
            <option value="3">Projeto C</option>
        </select>
        
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Atualizar</button>
        </div>

      </form>
    </div>
  </div>
</div>

  @include("bottom")

    


