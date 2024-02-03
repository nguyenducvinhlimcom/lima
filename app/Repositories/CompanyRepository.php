<?php

namespace App\Repositories;

use App\Models\Company;

final class CompanyRepository extends BaseRepository
{
    public function modelClass(): string
    {
        return Company::class;
    }

    public function findWithRelations(int $id, string $relations)
    {
        return $this->model->with($relations)->find($id);
    }

    public function cacheFind(int $id)
    {
        return $this->model->cacheFind($id);
    }
}
