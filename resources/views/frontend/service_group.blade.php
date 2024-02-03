@include('frontend.layout.header')

@push('metaTag')
<meta property="article:modified_time" content="{{ $serviceGroup->updated_at }}" />
@endpush
        <div class="container">
            <div class="row">
                <div class="col-md-9">\
                    {!! $serviceGroup->description !!}
                </div>
                <div class="col-md-3">
                    Right
                </div>
            </div>
        </div>
@include('frontend.layout.footer')
