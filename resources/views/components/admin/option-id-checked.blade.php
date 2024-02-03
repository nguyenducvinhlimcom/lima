@props(['data', 'id', 'val', 'option'])

@if (isset($option) && $option == true)
<option value="">
    -- chọn
</option>
@endif

@foreach ($data as $value)
<option
    value="{{ $value->getKey() }}"
    {{ $value->getKey() == $id ? 'selected' : '' }}
>
    {{ $value->$val }}
</option>
@endforeach
