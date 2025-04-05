@if ($paginator->hasPages())
    <nav class="flex justify-center mt-10 space-x-1 text-sm" aria-label="Pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-3 py-1 text-gray-400 cursor-not-allowed select-none">«</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}"
               class="px-3 py-1 text-gray-700 hover:text-blue-600 transition">«</a>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="px-3 py-1 text-gray-400 select-none">{{ $element }}</span>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <span class="px-3 py-1 font-semibold text-green-900 bg-blue-50 rounded-md">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}"
                           class="px-3 py-1 text-gray-700 hover:text-blue-600 rounded-md transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}"
               class="px-3 py-1 text-gray-700 hover:text-blue-600 transition">»</a>
        @else
            <span class="px-3 py-1 text-gray-400 cursor-not-allowed select-none">»</span>
        @endif
    </nav>
@endif
