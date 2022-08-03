<?php
  include("top.php");
  include("navBar.php");
?>

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-4">
    <a class="d-inline">Usuário</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Início</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Editar Senha</a>
  </div>


  <!-- Messages -->
  <div class="message d-flex alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fas fa-info-circle mr-2"></i>
    <p class="my-auto ml-4">Usuário criado com sucesso!</p>
    <button  type="button" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>
  </div>
  <div class="message d-flex alert alert-warning alert-dismissible hide" id="linkSuccess" role="alert">
    <i class="fas fa-info-circle mr-2"></i>
    <p class="my-auto ml-4">Link copiado!</p>
    <button  type="button" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>
  </div>

  <!-- Modal mais informações -->
  <div class="modal fade" id="displayLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modalHeader">
          <h5 class="modal-title" id="exampleModalLabel">Nome do link</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Projeto:</p>
          <p class="textInput">Projeto tal</p>
          <p>Criador:</p>
          <p class="textInput">Nome do criador</p>
          <p>Link Original:</p>
          <p class="textInput">www.something.com.br</p>
          <p>Link Encurtado:</p>
          <p class="textInput">www.3e.com.br/HASHSH/user</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Seus Links
      <div class="float-end">
            <button class="btn-primary d-inline h6"><i class="fas fa-link"></i>Novo Link</button>
        </div>
      </h4>
       
      <table class="table mt-4">
        <thead class="p-2">
          <tr>
            <th>Nome</th>
            <th>Projeto</th>
            <th>Link Encurtado</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Link Exemplo</td>
            <td>Ecoleta</td>
            <td class="position-relative">
              <p class="d-inline" style="white-space: nowrap;" id="exemplo1">
              https://3e.com.br/HASHSH/user 
              </p>
              <div  class="float-end smallBtnsTable">
                <button href="#" class="btn-secondary-small mr-2" data-bs-toggle="modal" data-bs-target="#displayLink"><i class="bi bi-eye-fill"></i></button>
                <button class="btn-secondary-small" onclick="CopyInnerFromId('exemplo1');"><i class="fas fa-copy"></i></button>
              </div>
            </td>
            <td class="optionsBtns text-center">
              <a href="#" class="btn btn-primary tableBtn d-inline"><i class="fas fa-edit mr-1"></i>Editar</a>
              <a href="#" class="btn btn-delete tableBtn d-inline"><i class="fas fa-trash mr-1"></i>Deletar</a>
            </td>
          </tr>
          <tr>
            <td>Link Exemplo</td>
            <td>Ecoleta</td>
            <td class="position-relative">
              <p class="d-inline" style="white-space: nowrap;">
              https://3e.com.br/HASHSH/user 
              </p>
              <div  class="float-end smallBtnsTable">
                <button href="#" class="btn-secondary-small mr-2" data-bs-toggle="modal" data-bs-target="#displayLink"><i class="bi bi-eye-fill"></i></button>
                <button class="btn-secondary-small"  onclick="CopyInnerFromId('exemplo2');"><i class="fas fa-copy"></i></button>
              </div>
            </td>
            <td class="optionsBtns text-center">
              <a href="#" class="btn btn-primary tableBtn d-inline"><i class="fas fa-edit mr-1"></i>Editar</a>
              <a href="#" class="btn btn-delete tableBtn d-inline"><i class="fas fa-trash mr-1"></i>Deletar</a>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="pagination">
        <a href="#"><i class="fas fa-caret-left"></i></a>
        <p class="p-1 mx-2">01</p>
        <a href="#" ><i class="fas fa-caret-right"></i></a>
      </div>
      
    </div>



  </div>
</div>
<?php
  include("bottom.php");
?>

    


