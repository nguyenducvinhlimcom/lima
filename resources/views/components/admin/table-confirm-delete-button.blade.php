@props(['id', 'url'])

<button class="btn btn-rounded btn-sm btn-danger btn-icon btn-default" type="button" onclick="confirm('{{ ('Bạn muốn xóa dữ liệu này?') }}') && document.getElementById('delete-form-{{ $id }}').submit()"><i class="glyphicon glyphicon-trash"></i></button>

@push('pageFooter')
    <form action="{{ $url }}" method="post" class="d-none" id="delete-form-{{ $id }}">
        @csrf
        @method('DELETE')
    </form>
@endpush
