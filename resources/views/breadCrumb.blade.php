<div class="breadCrumbHolder my-4">
    <a class="d-inline">{{$paths[0]}}</a>
    @for($i=1; $i<count($paths); $i++)
        <a class="d-inline"><i class="fas fa-angle-right"></i>{{$paths[$i]}}</a>
    @endfor
</div>