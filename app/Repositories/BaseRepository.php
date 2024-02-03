<?php

namespace App\Repositories;

use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Throwable;

abstract class BaseRepository
{
    protected Model $model;

    public function __construct()
    {
        $this->model = $this->makeModel();
    }

    abstract public function modelClass(): string;

    public function makeModel(): Model
    {
        return app()->make($this->modelClass());
    }

    public function all(?string $orderBy = null, $orderDirection = 'asc'): Collection
    {
        return $this->model
            ->newQuery()
            ->when($orderBy, fn (Builder $query) => $query->orderBy($orderBy, $orderDirection))
            ->get();
    }

    public function paginated(?string $orderBy = null, $orderDirection = 'asc'): LengthAwarePaginator
    {
        return $this->model
            ->newQuery()
            ->when($orderBy, fn (Builder $query) => $query->orderBy($orderBy, $orderDirection))
            ->paginate(config('constants.paginated'));
    }

    public function find(int $id): ?Model
    {
        return $this->model->newQuery()->find($id);
    }

    public function findAll(array $ids): Collection
    {
        return $this->model->newQuery()->findMany($ids);
    }

    public function create(array $attributes): ?Model
    {
        $data = $this->model->newInstance($attributes);
        try {
            DB::beginTransaction();

            $data->save();

            DB::commit();
        } catch (Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }

        return $data;
    }

    public function updateBy(Model $model, array $attributes): ?Model
    {
        try {
            DB::beginTransaction();

            $model->update($attributes);

            DB::commit();
        } catch (Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }

        return $model;
    }

    public function updateImageId(Model $model, $imageId): int
    {
        return $model->update(['image_id' => $imageId]);
    }
}
