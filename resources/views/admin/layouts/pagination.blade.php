<!-- resources/views/admin/pagination.blade.php -->

<!-- Trước tiên, kiểm tra xem có đủ dữ liệu để phân trang không -->
@if ($paginator->hasPages())
<div class="col-sm-4 text-center no-pd">
    <ul class='pagination pagination-sm m-t-none m-b-none'>
        <!-- Kiểm tra nếu đã ở trang đầu tiên  -->
        @if ($paginator->onFirstPage())
            <li><i data-ci-pagination-page="1" rel="prev"><i class="fa fa-angle-left"></i></a></li>
            <li class="disabled"><span>«</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}"rel="next"><i class="fa fa-angle-right"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <li><a href="#" data-ci-pagination-page="{{ $element }}">{{ $element }}</a></li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class='active'><a href='#'>{{ $page }}<span class='sr-only'></span></a></li>
                @else
                    <li><a href="{{ $url }}" data-ci-pagination-page="{{ $page }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

        <!-- Kiểm tra xem đang ở trang cuối cùng hay không -->
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">»</a></li>
        @else
            <li class="disabled"><span>»</span></li>
        @endif
    </ul>
</div>
@endif



