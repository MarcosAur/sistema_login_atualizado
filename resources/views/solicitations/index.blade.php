@include("top")
@include("navBar")


<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => ["Usuário", "Solicitações"]])

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
            <button class="btn-primary"><i class="fas fa-plus m-auto pr-1"></i>Abrir</button>
          </div>
          <div class="solicitation shadow bg-body rounded-lg border-0 ">
            <div class="card-header">Nome</div>
            <div class="card-body">
              <p class="text-center">Preciso que seja registrado um novo usuário ...</p>
         </div>
          <button class="btn-primary"><i class="fas fa-plus m-auto pr-1"></i>Abrir</button>
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
        <a class="simpleLink text-center" href="#">Estou com um problema muito sério, preciso falar com o admin!</a>
       @endif
      </div>
  </div>
</div>
@include("bottom")