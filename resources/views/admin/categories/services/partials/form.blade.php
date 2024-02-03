@csrf
<div class="row">
    <div class="col-md-6 col-md-offset-3 text-left">
        <div class="row">
            <div class="col-md-12">
                <h2>Thông tin dịch vụ</h2>
                <br />
                <div class="form-group">
                    <label>Tên dịch vụ <span class="text-danger">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $service->name) }}" class="form-control rounded text-left" placeholder="Tên dịch vụ" >
                    <x-admin.alert-validate name="name"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Danh mục dịch vụ <span class="text-danger">*</span></label>
                    <select name="service_group_id" class="w-full form-control rounded">
                        <x-admin.option-id-checked :data="$homeServiceGroups" :id="$service->service_group_id" val="name" option="true"/>
                    </select>
                    <x-admin.alert-validate name="service_group_id"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Vị trí (thứ tự hiển thị) <span class="text-danger">*</span></label>
                    <input type="number" placeholder="Vị trí" name="order" value="{{ old('order', $service->order) }}" class="form-control rounded text-left">
                    <x-admin.alert-validate name="order"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Mô tả ngắn</label>
                    <textarea name="note" rows="3" class="form-control rounded text-left">{{ $service->note }}</textarea>
                    <x-admin.alert-validate name="note"/>
                </div>
            </div>
            {{-- <div class="col-md-12">
                <h2>Thông tin bài viết dịch vụ</h2>
                <br />
                <div class="form-group">
                    <label>Tiêu đề bài viết <span class="text-danger">*</span></label>
                    <input type="text" name="name_page" value="{{ old('name_page', $service->name_page) }}" class="form-control rounded text-left" placeholder="Tiêu đề bài viết" >
                    <x-admin.alert-validate name="name_page"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Nội dung bài viết dịch vụ</label>
                    <textarea name="description" id="creditor" class="form-control rounded text-left h-150" placeholder="">{{ old('description', $service->description) }}</textarea>
                </div>
            </div>
            <div class="col-md-12">
                <h2>SEO</h2>
                <br />
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" name="title_seo" value="{{ old('title_seo', $service->title_seo) }}" class="form-control rounded text-left" placeholder="Tiêu đề SEO">
                    <x-admin.alert-validate name="title_seo"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Mô tả ngắn</label>
                    <textarea name="note_seo" rows="3" class="form-control rounded text-left">{{ old('note_seo', $service->note_seo) }}</textarea>
                    <x-admin.alert-validate name="note_seo"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Từ khóa (tách bằng dấu ,)</label>
                    <input type="text" name="keywords_seo" value="{{ old('keywords_seo', $service->keywords_seo) }}" class="form-control rounded text-left" placeholder="Từ khóa SEO (tách bằng dấu ,)">
                    <x-admin.alert-validate name="keywords_seo"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Đường dẫn dịch vụ (tự động tạo)</label>
                    <input type="text" name="slug" value="{{ old('keywords_seo', $service->slug) }}" class="form-control rounded text-left" placeholder="{{ config('app.url') }}">
                    <x-admin.alert-validate name="slug"/>
                </div>
            </div> --}}
            <br><br>
            <hr class="b-info">
            <input type="hidden" id="avatar_file_name" name="avatar_file_name" value="{{ old('avatar_file_name', $service->avatar_file_name) }}"/>
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
