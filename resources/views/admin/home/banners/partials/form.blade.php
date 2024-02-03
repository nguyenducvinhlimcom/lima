@csrf
<div class="row">
    <div class="col-md-6 col-md-offset-3 text-left">
        <div class="row">
            <div class="col-md-12">
                <h2>Thông tin banner</h2>
                <br />
                <div class="form-group">
                    <label>Đường dẫn banner (https://)</label>
                    <input type="text" name="url" value="{{ old('url', $banner->url ?? '#') }}" class="form-control rounded text-left" placeholder="Đường dẫn banner (https://)" >
                    <x-admin.alert-validate name="url"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Tên </label>
                    <input type="text" placeholder="Vị trí" name="name" value="{{ old('name', $banner->name) }}" class="form-control rounded text-left">
                    <x-admin.alert-validate name="name"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Vị trí (thứ tự hiển thị) <span class="text-danger">*</span></label>
                    <input type="number" placeholder="Vị trí" name="order" value="{{ old('order', $banner->order) }}" class="form-control rounded text-left">
                    <x-admin.alert-validate name="order"/>
                </div>
            </div>
            <br><br>
            <hr class="b-info">
            <input type="hidden" id="avatar_file_name" name="avatar_file_name" value="{{ old('avatar_file_name', $banner->avatar_file_name) }}"/>
            <div class="pull-right">
                <button class="btn btn-default btn-rounded m-r-sm hidden-sm hidden-xs" onclick="window.history.go(-1); return false;">Trở lại</button>
                <button type="reset" class="btn btn-default btn-rounded  m-r-sm">Khôi phục</button>
                <button type="submit" class="btn btn-success btn-rounded m-r-sm" name="submit_form" value="submit_form" >Lưu</button>
            </div>
        </div>
    </div>
</div>
