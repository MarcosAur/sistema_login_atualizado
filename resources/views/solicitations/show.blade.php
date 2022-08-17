@include("top")
@include("navBar")
@include("flashDisplay")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Solicitações", "route"=>"solicitation.index"],
    ["name"=>"Mostrar Solicitação", "route"=>"solicitation.index"]
  ]])

  <!-- Content -->
  <div class="card shadow m-1 bg-body rounded-lg border-0 d-inline">
    <p class="card-header text-center modalHeaderSecondary msgsHeader">Nome
      @if(session()->get("userId") == "Admin")
        <button class="btnFinalizar btn-primary d-inline float-end">Finalizar Solicitação</button>
      @endif
    </p>
    <div class="text-center py-0 bg-gray">
      <p>Descrição do problema</p>
    </div>
    <div class="incomeMessages m-2">
        <div class="msg left">
            <div class="from">
              <i class="fas fa-user fa-xs"></i>
              Username:
            </div>
            <div class="msgContent">
              <p class="my-auto">Tive um problema com o acesso da minha outra conta ...</p>
            </div>
        </div>
        <div class="msg right">
        <div class="from">
              <i class="fas fa-cog fa-xs"></i>
              Admin:
            </div>
            <div class="msgContent">
              <p class="my-auto">Massa</p>
            </div>
        </div>
    </div>
    <form class="textMsg d-flex">
        <input type="text" class="textInput">
        <button type="submit" class="btn-primary my-auto growHover d-inline"><i class="fas fa-paper-plane"></i></button>
    </form>
  </div>
</div>
@include("bottom")