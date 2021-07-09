

@if ($paginator->hasPages())
    <nav>
        <div class="page-pagination mt-8">
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <a class="">{{ $element }}</a>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @php
                        $page_str = str_pad($page, 2, "0", STR_PAD_LEFT) . '.';
                        @endphp
                        @if ($page == $paginator->currentPage())
                            <a class="active">{{ $page_str}}</a>
                        @else
                            <a class="" href="{{ $url }}">{{ $page_str }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

        </div>
    </nav>
@endif
