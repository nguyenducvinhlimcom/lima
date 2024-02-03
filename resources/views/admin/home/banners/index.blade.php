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
                                        <h1 class="text-success">Quản lý banner</h1>
                                    </li>
                                    <br><br>
                                </ul>
                                <div class="tab-content tab-content-1">
                                    <div class="tab-pane active" id="tab_1">
                                        <div class="row">
                                        <div class="clearfix"></div>
                                        <br>
                                        <div class="col-lg-12">
                                            <div class="col-lg-7 col-md-8 no-pd">
                                                <a href="{{ route('admin.home.banners.create') }}" class="btn btn-rounded btn-success pull-left m-r-sm m-b-sm"><i class="fa fa-plus"></i> Tạo banner</a>
                                             </div>
                                         </div>
                                        <div class="col-lg-12">
                                            <div class="table-responsive">
                                                <table class="table table-striped b-t b-light noFT-table" id="storage_table">
                                                    <thead>
                                                    <tr>
                                                        <th style="width:220px">Hình ảnh</th>
                                                        <th class="text-right fcurrency sorting">Tên</th>
                                                        <th class="text-right fcurrency sorting">URL</th>
                                                        <th class="text-right fcurrency sorting">Thứ tự</th>
                                                        <th class="text-right fcurrency sorting">Thời gian</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach ($banners as $banner)
                                                    <tr>
                                                        <td class="text-right fcurrency sorting">
                                                            <a target="_blank" href="{{ $banner->avatar_file_name }}">
                                                                <div style="background: url('{{ asset($banner->avatar_file_name) }}');background-size:cover;width:100%;height:150px;background-position: center;">
                                                                </div>
                                                            </a>
                                                        </td>
                                                        <td style="vertical-align: middle" class="text-right fcurrency sorting">
                                                            {{ $banner->name }}
                                                        </td>
                                                        <td style="vertical-align: middle" class="text-right fcurrency sorting">
                                                            <a class="inline-block" href="{{ $banner->url }}" target="_blank">
                                                                <h5 class="no-mr">{{ $banner->url }}</h5>
                                                            </a>
                                                        </td>
                                                        <td style="vertical-align: middle" class="text-right fcurrency sorting">
                                                            {{ $banner->order }}
                                                        </td>
                                                        <td style="vertical-align: middle" class="text-right fcurrency sorting" class=" text-right fcurrency">
                                                            Tạo: <b>{{ $banner->created_at }}</b><br>
                                                            Cập nhật: <b>{{ $banner->updated_at }}</b>
                                                        </td>
                                                        <td class=" action-button">
                                                            <a href="{{ route('admin.home.banners.edit', $banner) }}" class="active" ui-toggle-class="">
                                                                <button class="btn btn-rounded btn-sm btn-success btn-icon btn-default">
                                                                    <i class="icon icon-pencil"></i>
                                                                </button>
                                                            </a>
                                                            <x-admin.table-confirm-delete-button url="{{ route('admin.home.banners.destroy', $banner) }}" :id="$banner->getKey()"/>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <footer class="panel-footer no-border">
                                                <div class="row">
                                                    <div class="col-sm-4 no-pd">
                                                    <small class="text-muted inline m-t-sm m-b-sm">Tổng cộng <span class="total_file">{{ count($banners) }}</span> <span class="text-lowercase">banner</span>
                                                    </small>
                                                    </div>
                                                    {{ $banners->links() }}
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
