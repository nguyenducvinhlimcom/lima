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
                <div class="panel wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="tab-setting">
                            <div class="tab-container">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="pull-left">
                                        <h1 class="text-success">Chỉnh sửa nhận xét</h1>

                                        <x-admin.session-status />

                                        <br><br>
                                    </li>
                                </ul>
                                <div class="tab-content tab-content-1">
                                    <div class="tab-pane active" id="tab_1">

                                        <x-admin.button-upload-image name="nhận xét" image="{{ old('avatar_file_name', $feedback->avatar_file_name) }}"/>

                                        <form action="{{ route('admin.home.feedbacks.update', $feedback) }}" method="post" accept-charset="utf-8">
                                            @method('PUT')
                                            @include('admin.home.feedbacks.partials.form')
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
