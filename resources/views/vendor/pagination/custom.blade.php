@if ($paginator->hasPages())
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link"><i class="fas fa-arrow-left"></i></span></li>
        @else
            <li class="page-item" ><a class="page-link"  href="{{ $paginator->previousPageUrl() }}"  ><i class="fas fa-arrow-left"></i></a></li>
        @endif
        @foreach ($elements as $element )
              @if (is_string($element))
                  <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
              @endif
              @if (is_array($element))
                @foreach ($element as $page => $url )
                    @if ($page==$paginator->currentPage())
                        <li class="page-item active my-active"><spam class="page-link" href="{{ $url }}">{{ $page }}</spam></li>
                    @else
                        <li class="page-item "><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif

                @endforeach

              @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" ><i class="fas fa-arrow-right"></i></a></li>
        @else
            <li class="page-item disabled"><span class="page-link"> <i class="fas fa-arrow-right"></i> </span></li>

        @endif
    </ul>
@endif

