<?php

namespace App\Repositories;

use App\Models\Service;

final class ServiceRepository extends BaseRepository
{
    public function modelClass(): string
    {
        return Service::class;
    }

    public function cacheServices(?string $orderBy = null, $orderDirection = 'asc')
    {
        return $this->model->cacheMany($orderBy, $orderDirection);
    }
}
