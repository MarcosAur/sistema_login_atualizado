@include("top")
@include("navBar")
@include("flashDisplay")


<div class="container-fluid content">

  <!-- BreadCrumb -->
  @include("breadCrumb", ["paths" => [
    ["name"=>"Usuários", "route"=>"users.index"]
  ]])

  

  <!-- Messages -->
  <!-- <div class="message d-flex alert alert-warning alert-dismissible fade show" role="alert">
    <i class="fas fa-info-circle mr-2"></i>
    <p class="my-auto ml-4">Usuário criado com sucesso!</p>
    <button  type="button" data-bs-dismiss="alert"><i class="fas fa-times"></i></button>
  </div> -->


  <!-- Content -->
  <div class="card shadow p-3 m-1 pt-4 bg-body rounded-lg border-0 d-inline">
    
    <div class="d-flex flex-column">
      <h4 class="text-center w-100">Todos os Usuários
        <div class="float-end">
            <a class="btn-primary btn d-inline h6" href="{{route('users.create')}}"><i class="fas fa-user-plus fa-xs m-auto"></i>Novo Usuário</a>
            <button class="btn-primary d-inline h6 ml-2" type="button" data-bs-toggle="collapse" data-bs-target="#filter" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-search fa-xs m-auto"></i>Pesquisar</button>
        </div>
      </h4>

      <!-- filtro -->
      <div class="collapse" id="filter">
        <form class="card card-body m-auto filterCard">
            <div class="d-flex flex-column">
                <label for="filterByName">Filtrar por Nome</label>
                <input type="text" class="textInput my-2" name="filterByName" placeholder="Nome" />
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn-primary px-4 mt-2 mb-2 growHover">Pesquisar</button>
            </div>
        </form>
      </div>

      @if(isset($users))
      <table class="table mt-4 pb-3">
          <thead class="p-2">
              <tr>
                  <th>Nome</th>
                  <th>Nível de Acesso</th>
                  <th>Email</th>
                  <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $users as $user )
                    <tr>
                        <td>{{$user->nome}}</td>
                        <td>{{$user->nivelAcesso}}</td>
                        <td>{{$user->email}}</td>
                        <td class="optionsBtns text-center">
                          <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary tableBtn d-inline"><i class="fas fa-edit mr-1"></i>Editar</a>
                          <a href="{{route('users.delete', $user->id)}}" class="btn btn-delete tableBtn d-inline"><i class="fas fa-trash mr-1"></i>Deletar</a>
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
      @endif
      
    </div>



  </div>
</div>

@include("bottom")
