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

      @if(isset($solicitations))
       <div class="solicitationDisplay m-auto">
        @foreach ($solicitations as $solicitation)  
          <div class="solicitation shadow bg-body rounded-lg border-0 ">
            <div class="card-header">{{$solicitation->Usuario->nome}}</div>
            <div class="card-body">
              <p class="text-center">{{$solicitation->assunto}}</p>
            </div>
            <a class="btn btn-primary" href="{{route('solicitation.show', $solicitation->id)}}"><i class="fas fa-plus m-auto pr-1"></i>Abrir</a>
          </div>
        @endforeach
       </div>
       @else
          @if(session()->get("nivelAcesso") != "Admin")
            @include('warning', ["msg"=> "Você não tem nenhuma solicitação cadastrada!"])
          @endif
        @endif
       @if(session()->get("nivelAcesso") == "Comum" || session()->get("nivelAcesso") == "Observador")
        <a class="simpleLink text-center" href="{{route('solicitation.create')}}">Estou com um problema muito sério, preciso falar com o admin!</a>
       @endif
      </div>
  </div>
</div>
@include("bottom")