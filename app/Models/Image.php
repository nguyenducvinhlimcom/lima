<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'original_name',
        'file_name',
        'extension',
        'type',
        'size'
    ];
    public $timestamp = true;


    public function getImage() :string
    {
        return asset($this->file_name);
    }

    public function imageUploaded() :array
    {
        return [
            'filename' => $this->file_name,
            'message' => trans("Saved image successfully"),
            'result' => $this->getImage(),
            'state' => 200
        ];
    }
}
