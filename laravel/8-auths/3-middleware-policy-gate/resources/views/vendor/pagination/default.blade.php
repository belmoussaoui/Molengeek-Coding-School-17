@if ($paginator->hasPages())

@if (Route::currentRouteName() != 'home')

    <style>

        .myHover{
            border: white 1px solid;
            color: white;
        }

        .myHover:hover {
            background: #fff;
            color: #5846f9!important;
        }

        .myActive {
            background: #fff;
            color: #5846f9!important;
        }
    </style>

@else

    <style>
        .myHover{
            border: #5846f9 1px solid;
            color: #5846f9;
        }

        .myHover:hover {
            background: #5846f9!important;
            color: #fff;
        }

        .myActive {
            background: #5846f9;
            color: #fff!important;
        }
    </style>
    
@endif

    <nav class="fs-5">
        <ul class="pagination d-flex justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class=" mx-1 btn  myHover" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li>
                    <a class="myHover  mx-1 btn  btn " href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="mx-1" aria-current="page"><span class="btn myActive myHover ">{{ $page }}</span></li>
                        @else
                            <li><a class=" myHover mx-1 btn " href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a class=" myHover btn  mx-1" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class=" myHover btn  mx-1" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif