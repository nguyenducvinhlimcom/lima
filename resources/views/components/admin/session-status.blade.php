@if (session()->has('status'))
    <span class="{{ $attributes->merge(['class' => 'text-primary']) }}">
        <i class="icon icon-check"></i> {{ session('status') }}
    </span>
@endif

