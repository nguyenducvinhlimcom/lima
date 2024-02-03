@props(['image', 'name'])
<div class="row">
    <div class="col-md-4 col-md-offset-4 text-center">
        <div class="form-group" id="crop-avatar">
            <div class="avatar-view" title="Đổi hình ảnh {{ $name }}">
                <img class="avatar-noborder-radius" src="{{asset($image ? $image : 'assets/img/no-img.jpg'  )}}" alt="Avatar">
                <br/>
            </div>
            <!-- Cropping modal -->
            <div class="modal fade" id="avatar-modal" aria-hidden="true" arialabelledby="avatar-modal-label" role="dialog" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form class="avatar-form"
                            action="{{ route('upload.image') }}"
                            enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="modal-header">
                                <button type="button" class="close"
                                data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" id="avatar-modal-label">Đổi {{ $name }}</h4>
                            </div>
                            <div class="modal-body">
                                <div class="avatar-body">
                                <div class="avatar-upload">
                                    <input type="hidden" class="avatar-src"
                                        name="avatar_src">
                                    <input type="hidden" class="avatar-data"
                                        name="avatar_data">
                                    <label for="avatarInput">Chọn đường dẫn file hình</label>
                                    <input type="file" class="avatar-input"
                                        id="avatarInput" name="avatar_file" accept=".jpg,.jpeg,.png,.webp,.bmp,.gif">
                                    <input type="hidden" class="default-img-src" name="default_img_src" value="{{ $image ? $image : asset('assets/img/no-img.jpg') }}">
                                </div>
                                <div id='lbError' class='alert alert-danger hidden'>Ảnh không đúng định dạng jpeg, png, webp, bmp hay gif</div>
                                <div id='errorSize' class='alert alert-danger hidden'>Dung lượng ảnh quá lớn, tối đa 30MB</div>
                                <!-- Crop and preview -->
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="avatar-wrapper"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="avatar-preview preview-lg"></div>
                                        <div class="avatar-preview preview-md"></div>
                                        <div class="avatar-preview preview-sm"></div>
                                    </div>
                                </div>
                                <div class="row avatar-btns">
                                    <div class="col-md-9"></div>
                                    <div class="col-md-3">
                                        <button type="submit" id="save_member_note"
                                            class="btn btn-primary btn-block avatar-save">
                                            Cắt hình
                                        </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
    </div>
    
</div>

