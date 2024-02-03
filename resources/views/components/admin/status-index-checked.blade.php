@props(['status'])

{!! $status ? '<i class="fa fa-circle text-success text-xs"></i> '.config('constants.ACTIVE') : '<i class="fa fa-circle text-danger text-xs"></i> '.config('constants.BLOCK') !!}
