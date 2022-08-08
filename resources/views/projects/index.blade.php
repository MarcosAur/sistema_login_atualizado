@include("top")
@include("navBar")

<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Projetos", "route"=>"project.index"]
    ]])


  <!-- Messages -->
  <!-- <div class="message d-flex alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fas fa-info-circle mr-2"></i>
    <p class="my-auto ml-4">Usuário criado com sucesso!</p>
    <button  type="button" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>
  </div> -->
  @if(session()->has('status'))
    @include("warning", ["msg" => session()->get("status")])
  @endif


  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Todos os Projetos
      <div class="float-end">
            <a href="{{route("project.create")}}" class="btn btn-primary d-inline h6">Novo Projeto</a>
        </div>
      </h4>
      @if(isset($projects))
      <table class="table mt-4 pb-3">
        <thead class="p-2">
          <tr>
            <th>Nome</th>
            <th>Hash</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
          <tr>
            <td>{{$project->nome}}</td>
            <td>{{$project->hash}}</td>
            <td class="optionsBtns text-center">
              <a href="{{route('project.edit', $project->id)}}" class="btn btn-primary tableBtn d-inline"><i class="fas fa-edit mr-1"></i>Editar</a>
              <a href="{{route('project.delete', $project->id)}}" class="btn btn-delete tableBtn d-inline"><i class="fas fa-trash mr-1"></i>Deletar</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      <div class="pagination">
        <a href="#"><i class="fas fa-caret-left"></i></a>
        <p class="p-1 mx-2">01</p>
        <a href="#" ><i class="fas fa-caret-right"></i></a>
      </div>
      @else
        @include('warning', ["msg"=> "Nenhum projeto cadastrado!"])
      @endif
      
    </div>



  </div>
</div>

@include("bottom")

    


