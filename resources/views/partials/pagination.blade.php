<div class="page-pagination">
    <nav aria-label="Pagination">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="page-item">
                <a class="page-link" aria-label="Previous">
                    <span aria-hidden="true">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                </li>
            @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">
                        <i class="fa fa-chevron-left"></i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            @endif

            <!-- Pagination Elements -->
            @foreach ($elements as $element)
                <!-- "Three Dots" Separator -->
                @if (is_string($element))
                    <li><a>{{ $element }}</a></li>
                @endif

                <!-- Array Of Links -->
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><a  class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach


            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next" rel="next"> 
                    <span aria-hidden="true">
                        <i class="fa fa-chevron-right"></i>
                    </span>
                    <span class="sr-only">Next</span></a></li>
            @else
                <li class="page-item">
                    <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fa fa-chevron-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>