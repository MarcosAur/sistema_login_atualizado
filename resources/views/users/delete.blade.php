@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => ["Admin", "Usuários", "Deletar Usuários"]])

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Deletar Usuário</h4>
       <form class="m-auto" action="{{ route('project.destroy',$user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('DELETE')
        <p class="text-center">Tem certeza que quer deletar o usuário {{$user->nome}} ?</p>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn-delete btn px-4 mt-5 mb-2 growHover">Deletar</button>
        </div>

      </form>
    </div>
  </div>
</div>

@include("bottom")

    


