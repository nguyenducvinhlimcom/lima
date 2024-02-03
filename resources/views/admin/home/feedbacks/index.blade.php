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
                                                <h1 class="text-success">Quản lý nhận xét</h1>
                                            </li>
                                            <br><br>
                                        </ul>
                                        <div class="tab-content tab-content-1">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <a href="{{ route('admin.home.feedbacks.create') }}" class="btn btn-rounded btn-success pull-left m-r-sm m-b-sm"><i class="fa fa-plus"></i> Tạo nhận xét</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br/>
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped b-t b-light">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Tên khách hàng</th>
                                                                        <th>Công việc</th>
                                                                        <th>Vị Trí</th>
                                                                        <th style="width:75px;"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($feedbacks as $feedback)
                                                                    <tr class="">
                                                                        <td>
                                                                            <a href="{{ route('admin.home.feedbacks.edit', $feedback) }}" class="active" ui-toggle-class="">
                                                                            <img class="thumb-sm img-circle" src="{{ $feedback->avatar_file_name }}">
                                                                            {{ $feedback->name }}
                                                                            </a>
                                                                        </td>
                                                                        <td>{{ $feedback->job }}</td>
                                                                        <td>{{ $feedback->order }}</td>
                                                                        <td>
                                                                            <a href="{{ route('admin.home.feedbacks.edit', $feedback) }}" class="active" ui-toggle-class="">
                                                                                <button class="btn btn-rounded btn-sm btn-success btn-icon btn-default">
                                                                                    <i class="icon icon-pencil"></i>
                                                                                </button>
                                                                            </a>
                                                                            <x-admin.table-confirm-delete-button url="{{ route('admin.home.feedbacks.destroy', $feedback) }}" :id="$feedback->getKey()"/>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <footer class="panel-footer no-border">
                                                            <div class="row">
                                                                <div class="col-sm-4 hidden-xs no-pd">
                                                                    <small class="text-muted inline m-t-sm m-b-sm">Tổng cộng {{ count($feedbacks) }} nhận xét</small>
                                                                </div>
                                                                {{ $feedbacks->links() }}
                                                                <div class="col-sm-8 text-right no-pd">
                                                                </div>
                                                            </div>
                                                        </footer>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / main -->
        </div>
    </div>
@endsection
