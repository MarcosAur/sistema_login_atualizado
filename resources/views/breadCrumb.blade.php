@php
    $nivelAcesso = session()->get("nivelAcesso");
@endphp
<div class="breadCrumbHolder my-4">
    @if(isset($nivelAcesso))
        @if(session()->get("nivelAcesso") == "Admin")
            <a class="d-inline" href="{{route('index')}}">Admin</a>
        @elseif(session()->get("nivelAcesso") == "Observador")
            <a class="d-inline" href="{{route('index')}}">Observador</a>
        @elseif(session()->get("nivelAcesso") == "Comum")
            <a class="d-inline" href="{{route('index')}}">Usuário</a>
        @endif
    @else
        <a class="d-inline" href="{{route('index')}}">Deslogado</a>
    @endif

    @for($i=0; $i<count($paths); $i++)
        <a class="d-inline" href="{{route($paths[$i]['route'])}}">
            <i class="fas fa-angle-right"></i>
            {{$paths[$i]['name']}}
        </a>
    @endfor
</div>