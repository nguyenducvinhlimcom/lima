<?php

namespace App\Repositories;

use App\Models\Image;

final class ImageRepository extends BaseRepository
{
    public function modelClass(): string
    {
        return Image::class;
    }

    public function uploaded(Image $image): array
    {
        return $image->imageUploaded();
    }
}
