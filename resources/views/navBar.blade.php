@php
  $nivelAcesso = session()->get("nivelAcesso");
  $userId = session()->get("userId");

  $curTab = session()->get("curTab");
@endphp
<nav class="navbar navbar-expand-lg bg-light navBar">
      <div class="container-fluid navBar">
        <a class="logo-link navbar-brand" href="#"
          ><img class="logo m-3" src="./imgs/logo3e.png" alt="Logo 3e" />
        </a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- colocar a classe active no nav-item que for referente a pagina atual 
          Lembrar de tirar a barra tambem-->
          <li class="nav-item {{($curTab == 'inicio') ? 'active' : ''}}">
            <a class="nav-link d-inline growHover" href="{{route('inicio')}}"
            ><i class="bi bi-house-fill d-inline pr-2"></i>Início {{$userId}}</a
            >
          </li>
          
          <!-- <div class="barra"></div>
          
          <li class="nav-item">
            <a class="nav-link d-inline growHover" href="#"
            ><i class="bi bi-person-fill"></i>Perfil</a
            >
          </li> -->
          @if(!isset($userId))
            <div class="barra"></div>

            <li class="nav-item {{($curTab == 'logar') ? 'active' : ''}}">
              <a class="nav-link d-inline growHover" href="/login"
              ><i class="fas fa-sign-in-alt"></i>Logar</a
              >
            </li>    
          @else
            <div class="barra"></div>

            <li class="nav-item {{($curTab == 'deslogar') ? 'active' : ''}}">
              <a class="nav-link d-inline growHover" href="{{route('deslogar')}}"
                ><i class="fas fa-sign-out-alt"></i>Deslogar</a
              >
            </li>
          @endif
          
          

          @if($nivelAcesso=="Comum")
            <div class="barra"></div>
            
            <li class="nav-item {{($curTab == 'novoLink') ? 'active' : ''}}">
              <a class="nav-link d-inline growHover" href="{{route('novoLink')}}"
              ><i class="fas fa-link"></i>Novo Link</a
              >
            </li>
          @endif
          

          @if($nivelAcesso != "")
            <div class="barra"></div>
            
            <li class="nav-item {{($curTab == 'solicitacoes') ? 'active' : ''}}">
              <a class="nav-link d-inline growHover" href="#"
              ><i class="fas fa-comment"></i>Solicitações</a
              >
            </li>
          @endif

          @if ($nivelAcesso == "Admin")
            <div class="barra"></div>
            
            <li class="nav-item {{($curTab == 'projetos') ? 'active' : ''}}">
              <a class="nav-link d-inline growHover" href="#"
                ><i class="fas fa-folder"></i>Projetos</a
              >
            </li>

            <div class="barra"></div>
            
            <li class="nav-item {{($curTab == 'usuarios') ? 'active' : ''}}">
              <a class="nav-link d-inline growHover" href="#"
                ><i class="fas fa-users"></i>Usuários</a
              >
            </li>
          @endif
          </ul>
        </div>
      </div>
    </nav>