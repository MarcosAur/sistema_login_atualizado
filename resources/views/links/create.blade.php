@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-4">
    <a class="d-inline">Deslogado</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Início</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Novo Link</a>
  </div>
  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Criar Novo Link</h4>
       <form class="m-auto">

        <label for="link">Insira o Link:</label>
        <input type="text" class="textInput my-2" name="link" placeholder="https://site.3esolucoes.com.br/" />
        
        {{-- TODO com Autencicação --}}
        {{-- @if (Checar se é usuário normal)
            <label for="link">Selecione um Projeto</label>
            <select class="textInput form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>Abrir Menu</option>
                <option value="1">Projeto A</option>
                <option value="2">Projeto B</option>
                <option value="3">Projeto C</option>
            </select>  
        @endif --}}

        <div class="d-flex justify-content-center">
          <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Encurtar</button>
        </div>

      </form>
    </div>
  </div>
</div>
@include("bottom")


