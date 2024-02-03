@props(['checked', 'name'])

<div class="input-group">

    {{ config('constants.ACTIVE') }}

    <label class="i-switch i-switch-md bg-success m-t-sm m-r v-b">
        <input name="{{ $name }}" type="checkbox" {{ $checked ? 'checked' : '' }}/>
        <i></i>
    </label>

    {{ config('constants.BLOCK') }}

</div>
