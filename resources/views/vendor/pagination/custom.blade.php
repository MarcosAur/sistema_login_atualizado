
@if ($paginator->hasPages())
    <div class="pagination">

    @if ($paginator->onFirstPage())
        <a class="disabled"><i class="fas fa-caret-left disabled"></i></a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-caret-left"></i></a>
    @endif

    <p class="p-1 mx-2">{{ $paginator->currentPage() }}</p>

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" ><i class="fas fa-caret-right"></i></a>
        @else
        <a class="disabled"><i class="fas fa-caret-right disabled"></i></a>
    @endif
  </div>
@endif 