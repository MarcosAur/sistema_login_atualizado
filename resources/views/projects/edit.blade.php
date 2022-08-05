@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => ["Admin", "Projetos", "Editar Projetos"]])

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Editar Projeto</h4>
       <form class="m-auto" action="{{ route('project.update',$curProject->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" class="textInput my-2" name="nome" value="{{$curProject->nome}}" />
        
        <label for="hash">Hash:</label>
        <input type="text" class="textInput my-2" name="hash" value="{{$curProject->hash}}" maxlength="6"/>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Atualizar</button>
        </div>

      </form>
    </div>
  </div>
</div>

  @include("bottom")

    


