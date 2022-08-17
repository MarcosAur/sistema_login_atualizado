@include("top")
@include("navBar")
@include("flashDisplay")


<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Solicitações", "route"=>"solicitation.index"]
  ]])

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100 pb-5">Solicitações</h4>
       <div class="solicitationDisplay m-auto">
          <div class="solicitation shadow bg-body rounded-lg border-0 ">
            <div class="card-header">Nome</div>
            <div class="card-body">
              <p class="text-center">Preciso que seja registrado um novo usuário ...</p>
            </div>
            <a class="btn btn-primary" href="{{route('solicitation.show', 0)}}"><i class="fas fa-plus m-auto pr-1"></i>Abrir</a>
          </div>
          <div class="solicitation shadow bg-body rounded-lg border-0 ">
            <div class="card-header">Nome</div>
            <div class="card-body">
              <p class="text-center">Preciso que seja registrado um novo usuário ...</p>
         </div>
            <a class="btn btn-primary" href="{{route('solicitation.show', 0)}}"><i class="fas fa-plus m-auto pr-1"></i>Abrir</a>
          </div>
          <div class="solicitation shadow bg-body rounded-lg border-0 ">
            <div class="card-header finished">Nome</div>
            <div class="card-body">
              <p class="text-center">Preciso que seja registrado um novo usuário ...</p>
            </div>
            <button class="btn-gray">Finalizado</button>
          </div>
       </div>
       @if(session()->get("nivelAcesso") == "Comum" || session()->get("nivelAcesso") == "Observador")
        <a class="simpleLink text-center" href="{{route('solicitation.create')}}">Estou com um problema muito sério, preciso falar com o admin!</a>
       @endif
      </div>
  </div>
</div>
@include("bottom")