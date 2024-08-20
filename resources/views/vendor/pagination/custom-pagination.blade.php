@if ($paginator->hasPages())
    <ul class="pagination" style="display: flex; justify-content: center; list-style-type: none; padding: 0;">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" style="padding: 10px 15px; text-decoration: none; color: #007bff; background-color: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px;">&lsaquo;</a>
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
                        <li class="active" aria-current="page"><span style="padding: 10px 15px; background-color: #007bff; color: #fff; border: 1px solid #007bff; border-radius: 4px;">{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}" style="padding: 10px 15px; text-decoration: none; color: #007bff; background-color: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px;">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" style="padding: 10px 15px; text-decoration: none; color: #007bff; background-color: #f8f9fa; border: 1px solid #dee2e6; border-radius: 4px;">&rsaquo;</a>
            </li>
        @else
            <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif
