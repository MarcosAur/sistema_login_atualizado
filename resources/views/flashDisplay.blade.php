@if(session()->has('status'))
    <div class="container-fluid content">
        @include("warning", ["msg" => session()->get("status")])
    </div>
@endif