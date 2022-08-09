@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  <div class="breadCrumbHolder my-4">
    <a class="d-inline">Delogado</a>
    <a class="d-inline"><i class="fas fa-angle-right"></i>Início</a>
  </div>

  <div class="message d-flex alert alert-warning alert-dismissible hide" id="linkSuccess" role="alert">
    <i class="fas fa-info-circle mr-2"></i>
    <p class="my-auto ml-4">Link copiado!</p>
    <button  type="button" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>
  </div>

  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Link Criado Com Sucesso </h4>

      <div class="m-auto contentHolder mt-4">
        <div class="textInput mb-0" style="width: 100%;">
          <p class="mr-auto d-inline">{{$url}}</p>
          <button class="btn-secondary-small d-inline float-end" onclick="CopyLink('{{$url}}')"><i class="fas fa-copy"></i></button>
        </div>
        <p class="text-center mb-4">Esse link vai redirecionar para <b>{{$originalUrl}}</b>.</p>
      </div>
    </div>
  </div>
</div>
@include("bottom")