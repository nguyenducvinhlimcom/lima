@extends('admin.layouts.app')

@section('content')

<div class="app-content-body ">
    <div class="hbox hbox-auto-xs hbox-auto-sm" ng-init="
        app.settings.asideFolded = false;
        app.settings.asideDock = false;
        ">
        <!-- main -->
        <div class="col-lg-12 page-content">
            <div class="col-md-12">
            <!-- tasks -->
            <style type="text/css">
                .cropper-view-box, .cropper-face {
                    border-radius: unset;
                }
            </style>
                <div class="panel wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-setting">
                            <div class="tab-container">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="pull-left">
                                        <h1 class="text-success">Tạo banner</h1>

                                        <x-admin.session-status />

                                        <br><br>
                                    </li>
                                </ul>
                                <div class="tab-content tab-content-1">
                                    <div class="tab-pane active" id="tab_1">

                                        <x-admin.button-upload-image name="banner" image="{{ old('avatar_file_name') }}"/>

                                        <form action="{{ route('admin.home.banners.store') }}" method="post" accept-charset="utf-8">
                                            @include('admin.home.banners.partials.form', ['banner' => app(App\Models\Banner::class)])
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- / tasks -->
            </div>
        </div>
        <!-- / main -->
    </div>
</div>

@endsection
