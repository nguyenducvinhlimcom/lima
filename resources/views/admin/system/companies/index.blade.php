@extends('admin.layouts.app')

@section('content')

@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')

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
                #map {
                height: 400px;
                width: 540px;
                position: relative;
                overflow: auto;
                }
            </style>
            <div class="panel wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tab-setting">
                        <div class="tab-container">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="pull-left">
                                    <h1 class="text-success">Thông tin công ty</h1>
                                    <br><br>
                                </li>
                            </ul>
                            <div class="tab-content tab-content-1">
                                <div class="tab-pane active" id="tab_1">

                                    <x-admin.button-upload-image name="logo" image="{{ old('avatar_file_name', $company->avatar_file_name) }}"/>

                                    <form action="" method="post" accept-charset="utf-8">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-md-offset-3 text-left">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                    <h2>Thông tin công ty</h2>
                                                    <br />
                                                    <div class="form-group">
                                                        <label>Tên công ty</label>
                                                        <input type="text" name="company_name" value="{{ old('company_name', $company->company_name) }}" class="form-control rounded text-left" placeholder="" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Địa chỉ</label>
                                                        <input type="text" placeholder="Số nhà/hẻm - tên đường" name="address" value=" {{ old('address', $company->address) }}" class="form-control rounded text-left" placeholder="" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Tỉnh thành</label>
                                                        <select data-rel="select2" id="province" name="province_id" class="w-full form-control rounded data_province">

                                                            <x-admin.option-id-checked :data="$provinces" :id="$company->province_id" val="name"/>

                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Quận/Huyện</label>
                                                        <select data-rel="select2" id="district" name="district_id" class="w-full form-control rounded">

                                                            <x-admin.option-id-checked :data="$company->province->districts" :id="$company->district_id" val="name"/>

                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Phường/Xã</label>
                                                        <select data-rel="select2" id="ward" name="ward_id" class="w-full form-control rounded">

                                                            <x-admin.option-id-checked :data="$company->wards" :id="$company->ward_id" val="name"/>

                                                        </select>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="text" name="email" value="{{ old('email', $company->email) }}" class="form-control rounded text-left" placeholder="" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Số điện thoại</label>
                                                        <input type="text" name="telephone" value="{{ old('telephone', $company->telephone) }}" class="form-control rounded text-left" placeholder="" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Website</label>
                                                        <input type="text" name="website" value="{{ old('website', $company->website) }}" class="form-control rounded text-left" placeholder="" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Facebook</label>
                                                        <input type="text" name="facebook" value="{{ old('facebook', $company->facebook) }}" class="form-control rounded text-left" placeholder="" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Zalo</label>
                                                        <input type="text" name="zalo" value="{{ old('zalo', $company->zalo) }}" class="form-control rounded text-left" placeholder="" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Google business</label>
                                                        <input type="text" name="google_business" value="{{ old('google_business', $company->google_business) }}" class="form-control rounded text-left" placeholder="" >
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Mô tả ngắn</label>
                                                        <textarea name="note" rows="3" class="form-control rounded text-left">{{ old('note', $company->note) }}</textarea>
                                                    </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Giới thiệu doanh nghiệp</label>
                                                            <textarea name="description" id="creditor" class="form-control rounded text-left h-150" placeholder="">{{ old('descriptions', $company->description) }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <h2>SEO</h2>
                                                        <br />
                                                        <div class="form-group">
                                                            <label>Từ khóa (phân chia bằng dấu ,)</label>
                                                            <input type="text" name="keywords_seo" value="{{ old('keywords_seo', $company->keywords_seo) }}" class="form-control rounded text-left" placeholder="Từ khóa 1, từ khóa 2, từ khóa 3,..">
                                                            <x-admin.alert-validate name="keywords_seo"/>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                    <hr class="b-info">
                                                    <input type="hidden" id="avatar_file_name" name="avatar_file_name" value="{{ old('avatar_file_name', $company->avatar_file_name) }}"/>
                                                    <div class="pull-right">
                                                    <button class="btn btn-default btn-rounded m-r-sm hidden-sm hidden-xs" onclick="window.history.go(-1); return false;">Trở lại</button>
                                                    <button type="reset" class="btn btn-default btn-rounded  m-r-sm">Khôi phục</button>
                                                    <button type="submit" class="btn btn-success btn-rounded m-r-sm" name="submit_form" value="submit_form" >Lưu</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
            <script language='javascript'>
                CKEDITOR.replace('creditor', {
                        height: '200px',
                        width: '100%',
                        removePlugins :'maximize'
                    });
                var str_provinces = '<option value="">Chọn tỉnh thành</option>';
                $(function(){

                    active_nav_menu('manage_system','company_info')

                    var str_province = "";
                    var str_district = "";
                    var str_ward = "";
                    var address_stress = $("[name=address]").val();

                    $(document).ready(function() {
                        $('#tag').val(null).change()
                    });

                    $("[name=telephone]").on('change, keyup', function(e) {
                        var currentInput = $(this).val();
                        var fixedInput = currentInput.replace(/[^0-9\- ]/g, '');
                        $(this).val(fixedInput);
                    });

                    $('#province').change(function(){
                        var province = $('#province').val();
                        $.ajax({
                            url: BASE_URL+"ManageSystem/get_districts",
                            type: "get",
                            dataType: 'json',
                            data: {
                                province: province
                            },
                            success: function (data) {
                                $('#district').empty();
                                $('#ward').empty();
                                $('#district').append('<option value="" disabled selected>Chọn quận huyện</option>');
                                $.each(data, function(index, district) {
                                    $('#district').append('<option value="'+district.id+'">'+district.name+'</option>');
                                });
                                $('#district').select2('val',null);
                                $('#ward').select2('val',null);
                                onCompanyAddressChange()
                            }
                        })
                    })

                    $('#district').change(function(){
                        var district = $('#district').val();
                        $.ajax({
                            url: BASE_URL+"ManageSystem/get_wards",
                            type: "get",
                            dataType: 'json',
                            data: {
                                district: district
                            },
                            success: function (data) {
                                $('#ward').empty();
                                $('#ward').append('<option value="" disabled selected>Chọn phường xã</option>');
                                $.each(data, function(index, ward) {
                                    $('#ward').append('<option value="'+ward.id+'">'+ward.name+'</option>');
                                });
                                $('#ward').select2('val',null);
                                onCompanyAddressChange()
                            }
                        })
                    })

                    $(document).on('googleMap:click', {}, function (event, data) {
                        deleteGMapMarkers()
                        addGMapMarker(data.position)
                        $('#lat').val(data.position.lat())
                        $('#lng').val(data.position.lng())
                    })
                });
            </script><!-- / tasks -->
            </div>
        </div>
        <!-- / main -->
    </div>
</div>

@endsection
