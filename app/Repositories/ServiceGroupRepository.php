<?php

namespace App\Repositories;

use App\Models\ServiceGroup;

final class ServiceGroupRepository extends BaseRepository
{
    public function modelClass(): string
    {
        return ServiceGroup::class;
    }

    public function cacheMenuServiceGroups(?string $orderBy = null, $orderDirection = 'asc')
    {
        return $this->cacheHomeServiceGroups($orderBy, $orderDirection)->where('menu_status', 1);
    }

    public function cacheHomeServiceGroups(?string $orderBy = null, $orderDirection = 'asc', array $relation = [])
    {
        return $this->model->cacheMany($orderBy, $orderDirection, $relation);
    }

    public function findKey(string $slug, ?string $key = 'slug')
    {
        return $this->model->cacheFindKey($slug, $key);
    }
}
