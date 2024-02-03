<?php

namespace App\Repositories;

use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Support\Collection;

final class AddressRepository extends BaseRepository
{

    public function modelClass(): string
    {
        return Province::class;
    }

    public function getDistricts(?string $orderBy = null, $orderDirection = 'asc', int $id = null): Collection
    {
        return District::where('province_id', $id)
        ->when($orderBy, fn (Builder $query) => $query->orderBy($orderBy, $orderDirection))
        ->get();
    }

    public function getWards(?string $orderBy = null, $orderDirection = 'asc', int $id = null): Collection
    {
        return Ward::where('district_id', $id)
        ->when($orderBy, fn (Builder $query) => $query->orderBy($orderBy, $orderDirection))
        ->get();
    }
}
