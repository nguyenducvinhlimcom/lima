<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ImageRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        return $this->getFileAndUpload($this->file('avatar_file'));
    }

    public function getFileAndUpload($file)
    {
        $type = array(
            "jpg"=>"image",
            "jpeg"=>"image",
            "png"=>"image",
            "svg"=>"image",
            "webp"=>"image",
            "gif"=>"image",
        );
        if($this->hasFile('avatar_file')) {
            /** @var string $extension Đuôi file, chữ thường */
            $extension = strtolower($file->getClientOriginalExtension());
            if(isset($type[$extension])) {
                $originalName = null;
                $arr = explode('.', $file->getClientOriginalName());  // Tên file gốc : array
                for($i=0; $i < count($arr)-1; $i++){
                    if($i == 0){
                        $originalName .= $arr[$i];
                    }
                    else{
                        $originalName .= ".".$arr[$i];
                    }
                }

                $path = $file->store('uploads/all', 'local'); // Đường dẫn hình ảnh gốc (trên thiết bị khách hàng)
                $size = $file->getSize(); // Dung lượng ảnh | bite;
                if($type[$extension] == 'image'){
                    try {
                        $img = Image::make($file->getRealPath())->encode();
                        $height = $img->height();
                        $width = $img->width();
                        if($width > $height && $width > 1500){
                            $img->resize(1500, null, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        }elseif ($height > 1500) {
                            $img->resize(null, 800, function ($constraint) {
                                $constraint->aspectRatio();
                            });
                        }
                        $img->save(base_path('public/').$path);
                        clearstatcache();
                        $size = $img->filesize();

                        if (env('FILESYSTEM_DRIVER') == 's3') {
                            Storage::disk('s3')->put($path, file_get_contents(base_path('public/').$path));
                            unlink(base_path('public/').$path);
                        }
                    } catch (\Exception $e) {
                        //dd($e);
                    }
                }
                $this->merge([
                    'file_name' => $path,
                    'original_name' => $originalName,
                    'extension' => $extension,
                    'size' => $size,
                    'type' => $type[$extension],
                ]);
            }
        }

    }

    public function rules(): array
    {
        return [
            'file_name' => ['required', 'string', 'max:100', 'unique:images'],
            'original_name' => ['required', 'string', 'max:255'],
            'extension' => ['required', 'max:10',['in' => config('constants.VAL_EXTENSION')]],
            'type' => ['required', 'max:100',['in' => config('constants.TYPE_IMAGE')]],
            'size' => ['required','integer', config('constants.SIZE_IMAGE')],
        ];
    }
}
