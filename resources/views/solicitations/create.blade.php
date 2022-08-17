
@include("top")
@include("navBar")
@include("flashDisplay")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Solicitações", "route"=>"solicitation.index"],
    ["name"=>"Criar Solicitação", "route"=>"solicitation.create"]
  ]])

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Criar Nova Solicitação</h4>
       <form class="m-auto" method="POST" action='{{route("solicitation.store")}}'>
        @csrf
        <label for="link">Assunto:</label>
        <input type="text" class="textInput my-2"  maxlength="100" name="assunto" placeholder="Breve descrição do problema" />
        @error('assunto')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label for="link">Descreva o problema:</label>
        <textarea class="textInput bigTextInput my-2" name="descricao" placeholder="Descrição detalhada do problema"></textarea>
        @error('descricao')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Criar</button>
        </div>

      </form>
    </div>
  </div>
</div>
@include("bottom")

    


