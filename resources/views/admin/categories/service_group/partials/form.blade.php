@csrf
<div class="row">
    <div class="col-md-6 col-md-offset-3 text-left">
        <div class="row">
            <div class="col-md-12">
                <h2>Thông tin danh mục dịch vụ</h2>
                <br />
                <div class="form-group">
                    <label>Tên danh mục <span class="text-danger">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $serviceGroup->name) }}" class="form-control rounded text-left" placeholder="Tên danh mục" >
                    <x-admin.alert-validate name="name"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Vị trí (thứ tự hiển thị) <span class="text-danger">*</span></label>
                    <input type="number" placeholder="Vị trí" name="order" value="{{ old('order', $serviceGroup->order) }}" class="form-control rounded text-left">
                    <x-admin.alert-validate name="order"/>
                </div>
            </div>
            <div class="form-group col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Hiển thị danh mục</label>
                            <x-admin.checkbox-status name="menu_status" :checked="$serviceGroup->menu_status"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Mô tả ngắn</label>
                    <textarea name="note" rows="3" class="form-control rounded text-left">{{ $serviceGroup->note }}</textarea>
                    <x-admin.alert-validate name="note"/>
                </div>
            </div>
            <div class="col-md-12">
                <h2>Thông tin bài viết dịch vụ</h2>
                <br />
                <div class="form-group">
                    <label>Tiêu đề bài viết <span class="text-danger">*</span></label>
                    <input type="text" name="name_page" value="{{ old('name_page', $serviceGroup->name_page) }}" class="form-control rounded text-left" placeholder="Tiêu đề bài viết" >
                    <x-admin.alert-validate name="name_page"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Nội dung bài viết dịch vụ</label>
                    <textarea name="description" id="creditor" class="form-control rounded text-left h-150" placeholder="">{{ old('description', $serviceGroup->description) }}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <h2>SEO</h2>
                <br />
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title_seo" value="{{ old('title_seo', $serviceGroup->title_seo) }}" class="form-control rounded text-left" placeholder="Tiêu đề SEO">
                    <x-admin.alert-validate name="title_seo"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Mô tả ngắn</label>
                    <textarea name="note_seo" rows="3" class="form-control rounded text-left">{{ old('note_seo', $serviceGroup->note_seo) }}</textarea>
                    <x-admin.alert-validate name="note_seo"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Từ khóa (phân chia bằng dấu ,)</label>
                    <input type="text" name="keywords_seo" value="{{ old('keywords_seo', $serviceGroup->keywords_seo) }}" class="form-control rounded text-left" placeholder="Từ khóa SEO (tách bằng dấu ,)">
                    <x-admin.alert-validate name="keywords_seo"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Đường dẫn danh mục (tự động tạo)</label>
                    <input type="text" name="slug" value="{{ old('keywords_seo', $serviceGroup->slug) }}" class="form-control rounded text-left" placeholder="{{ config('app.url') }}">
                    <x-admin.alert-validate name="slug"/>
                </div>
            </div>
            <br><br>
            <hr class="b-info">
            <input type="hidden" id="avatar_file_name" name="avatar_file_name" value="{{ old('avatar_file_name', $serviceGroup->avatar_file_name) }}"/>
            <div class="pull-right">
                <button class="btn btn-default btn-rounded m-r-sm hidden-sm hidden-xs" onclick="window.history.go(-1); return false;">Trở lại</button>
                <button type="reset" class="btn btn-default btn-rounded  m-r-sm">Khôi phục</button>
                <button type="submit" class="btn btn-success btn-rounded m-r-sm" name="submit_form" value="submit_form" >Lưu</button>
            </div>
        </div>
    </div>
</div>

@push('pageFooter')
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('creditor', {
        height: '1000px',
        width: '100%',
        removePlugins :'maximize'
    });
</script>
@endpush()
