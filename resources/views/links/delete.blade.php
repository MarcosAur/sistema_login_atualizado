@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Links", "route"=>"project.index"],
    ["name"=>"Deletar Links", "route"=>"project.index"]
  ]])
  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Deletar Projeto</h4>
       <form class="m-auto" action="{{ route('links.destroy',$curLink->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <p class="text-center">Tem certeza que quer deletar o link {{$curLink->nome}} que direciona para {{$curLink->linkOriginal}} ?</p>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn-delete btn px-4 mt-5 mb-2 growHover">Deletar</button>
        </div>

      </form>
    </div>
  </div>
</div>

  @include("bottom")

    


