
@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-4">
    <a class="d-inline">Usuário</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Solicitações</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Criar Solicitação</a>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Criar Nova Solicitação</h4>
       <form class="m-auto">

        <label for="link">Assunto:</label>
        <input type="text" class="textInput my-2"  maxlength="100" name="assunto" placeholder="Breve descrição do problema" />
        

        <label for="link">Descreva o problema:</label>
        <textarea class="textInput bigTextInput my-2" name="link" placeholder="Descrição detalhada do problema"></textarea>
        
        
        <div class="d-flex justify-content-center">
          <button type="submit" class="btn-primary px-4 mt-5 mb-2 growHover">Criar</button>
        </div>

      </form>
    </div>
  </div>
</div>
@include("bottom")

    


