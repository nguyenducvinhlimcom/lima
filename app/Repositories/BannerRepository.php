<?php

namespace App\Repositories;

use App\Models\Banner;

final class BannerRepository extends BaseRepository
{
    public function modelClass(): string
    {
        return Banner::class;
    }

    public function cacheBanners(?string $orderBy = null, $orderDirection = 'asc')
    {
        return $this->model->cacheMany($orderBy, $orderDirection);
    }
}
