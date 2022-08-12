@include("top")
@include("navBar")


<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Início", "route"=>"index"]
    ]])



  <!-- Messages -->
  <!-- <div class="message d-flex alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fas fa-info-circle mr-2"></i>
    <p class="my-auto ml-4">Usuário criado com sucesso!</p>
    <button  type="button" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>
  </div> -->
  <div class="message d-flex alert alert-warning alert-dismissible hide" id="linkSuccess" role="alert">
    <i class="fas fa-info-circle mr-2"></i>
    <p class="my-auto ml-4">Link copiado!</p>
    <button  type="button" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>
  </div>

  <!-- Modal mais detalhes links -->
  <div class="modal fade" id="displayLink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modalHeader">
          <h5 class="modal-title" id="linkModalName">Nome do link</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Projeto:</p>
          <p class="textInput" id="projectModalDisplay">Projeto tal</p>
          <p>Criador:</p>
          <p class="textInput" id="criadorModalDisplay">Nome do criador</p>
          <p>Link Original:</p>
          <p class="textInput" id="linkModalDisplay">www.something.com.br</p>
          <p>Link Encurtado:</p>
          <p class="textInput" id="shortLinkModalDisplay">www.3e.com.br/HASHSH/user</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  @if(session()->has('status'))
    @include("warning", ["msg" => session()->get("status")])
  @endif
  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    


    <div class="d-flex flex-column">
      <h4 class="text-center w-100">{{(session()->get("nivelAcesso") == "Admin" || session()->get("nivelAcesso") == "Observador") ? 'Todos os Links' : 'Seus Links'}}
        @if(session()->get("nivelAcesso") == "Admin" || session()->get("nivelAcesso") == "Observador")
          <button class="btn-primary d-inline float-end h5" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-sort-amount-down fa-xs"></i>Filtrar</button>
        @endif
      </h4>

      @if(isset($links) && $links->count() > 0)
      <!-- filtro -->
      <div class="collapse" id="filter">
        <form class="card card-body m-auto filterCard">
            <div class="d-flex inputs">
                <div class="d-flex flex-column">
                    <label for="filterByCreator">Filtrar por Criador</label>
                    <input type="text" class="textInput my-2" name="filterByCreator" placeholder="Nome" />
                </div>
                <div class="d-flex flex-column">
                    <label for="filterByProject">Filtrar por Project</label>
                    <select class="textInput my-2" name="cars" id="cars">
                      <option class="select" value="">Selecione um projeto</option>
                      @foreach ($projects as  $project)
                        <option value="{{$project->id}}">{{$project->nome}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="d-flex flex-column">
                    <label for="filterByName">Filtrar por Nome</label>
                    <input type="text" class="textInput my-2" name="filterByName" placeholder="Nome" />
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn-primary px-4 mt-2 mb-2 growHover">Filtrar</button>
            </div>
        </form>
      </div>

      <table class="table mt-4 pb-3">
        <thead class="p-2">
          <tr>
            <th>Nome</th>
            <th>Projeto</th>
            <th>Criador</th>
            <th>Link Encurtado</th>
            @if(session()->get("nivelAcesso") == "Admin" || session()->get("nivelAcesso") == "Comum")
            <th>Ações</th>
            @endif
          </tr>
        </thead>
        <tbody>
          @foreach ($links as $link)
          <tr>
            <td>
              @if(isset($link->nome))
                {{$link->nome}}
              @else
                Sem Nome
              @endif
            </td>
            <td>
              @if(isset($link->projeto))
                {{$link->projeto}}
              @else
                Sem Projeto
              @endif
            </td>
            <td>
              @if(isset($link->criador_id))
                {{$link->criador_id}}
              @else
                Sem Criador
              @endif
            </td>
            <td class="position-relative">
              <p class="d-inline" style="white-space: nowrap;">
                @if(isset($link->linkEncurtado))
                  {{$link->linkEncurtado}}
                @else
                  Falha ao carregar link
                @endif
              </p>
              <div class="float-end smallBtnsTable">
                <button href="#" class="btn-secondary-small mr-2" data-bs-toggle="modal" data-bs-target="#displayLink" onclick="ChangeItemModalId({{$link}});"><i class="bi bi-eye-fill"></i></button>
                <button class="btn-secondary-small" onclick="CopyLink('{{$link->linkEncurtado}}');"><i class="fas fa-copy"></i></button>
              </div>
            </td>
            @if(session()->get("nivelAcesso") == "Admin" || session()->get("nivelAcesso") == "Comum")
              <td class="optionsBtns text-center">
                <a href="{{route('links.edit', $link->id)}}" class="btn btn-primary tableBtn d-inline"><i class="fas fa-edit mr-1"></i>Editar</a>
                <a href="{{route('links.delete', $link->id)}}" class="btn btn-delete tableBtn d-inline"><i class="fas fa-trash mr-1"></i>Deletar</a>
              </td>
            @endif
          </tr>
          @endforeach
        </tbody>
      </table>
      
      {{ $links->links('vendor.pagination.custom') }}
      @else
      <div class="text-center mx-5">
        @include('warning', ["msg"=> "Nenhum link cadastrado!"])
      </div>
      @endif

      
    </div>



  </div>
</div>

@include("bottom")


    


