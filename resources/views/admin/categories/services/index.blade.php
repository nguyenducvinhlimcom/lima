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
                                                <h1 class="text-success">Quản lý danh sách dịch vụ</h1>
                                            </li>
                                            <br><br>
                                        </ul>
                                        <div class="tab-content tab-content-1">
                                            <div class="tab-pane active" id="tab_1">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <a href="{{ route('admin.categories.services.create') }}" class="btn btn-rounded btn-success pull-left m-r-sm m-b-sm"><i class="fa fa-plus"></i> Tạo dịch vụ</a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <br/>
                                                    <div class="col-lg-12">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped b-t b-light">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Tên dịch vụ</th>
                                                                        <th>Danh mục dịch vụ</th>
                                                                        <th>Vị Trí</th>
                                                                        <th>Thời gian</th>
                                                                        <th style="width:75px;"></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($services as $service)
                                                                    <tr class="">
                                                                        <td >
                                                                            <a href="{{ route('admin.categories.services.edit', $service) }}">
                                                                                <img class="pull-left thumb m-r-xs radius-8" src="{{ asset($service->avatar_file_name) }}">
                                                                                <h5 class="no-mr">{{ $service->name }}</h5>
                                                                            </a>
                                                                        </td>
                                                                        <td>{{ $service->serviceGroup->name }}</td>
                                                                        <td>{{ $service->order }}</td>
                                                                        <td>
                                                                            Tạo: <b>{{ $service->created_at }}</b><br>
                                                                            Cập nhật: <b>{{ $service->updated_at }}</b>
                                                                        </td>
                                                                        <td>
                                                                            <a href="{{ route('admin.categories.services.edit', $service) }}" class="active" ui-toggle-class="">
                                                                                <button class="btn btn-rounded btn-sm btn-success btn-icon btn-default">
                                                                                    <i class="icon icon-pencil"></i>
                                                                                </button>
                                                                            </a>
                                                                            <x-admin.table-confirm-delete-button url="{{ route('admin.categories.services.destroy', $service) }}" :id="$service->getKey()"/>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <footer class="panel-footer no-border">
                                                            <div class="row">
                                                                <div class="col-sm-4 hidden-xs no-pd">
                                                                    <small class="text-muted inline m-t-sm m-b-sm">Tổng cộng {{ count($services) }} dịch vụ</small>
                                                                </div>
                                                                {{ $services->links() }}
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
