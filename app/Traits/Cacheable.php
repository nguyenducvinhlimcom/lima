<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

trait Cacheable
{
    public function getCacheKey(): string
    {
        return sprintf('%s.many', get_class($this));
    }

    public function getCacheKeyId($id): string
    {
        return sprintf('%s.%s', get_class($this), $id);
    }

    public function forgetCacheKeyId($id)
    {
        Cache::forget($this->getCacheKeyId($id));
    }

    public function forgetCacheKey()
    {
        Cache::forget($this->getCacheKey());
    }

    public function cacheMany(?string $orderBy = null, $orderDirection = 'asc', array $relation = []): Collection
    {
        return Cache::remember($this->getCacheKey(), config('cache.1_month'), function () use($orderBy, $orderDirection, $relation) {
            return $this->with($relation)
                    ->orderBy($orderBy, $orderDirection)->get();
        });
    }

    public function cacheFind(int $id): ?Model
    {
        return Cache::remember($this->getCacheKeyId($id), config('cache.1_month'), fn () => $this->find($id));
    }

    public function cacheFindKey(?string $value = null, ?string $key = 'slug')
    {
        return Cache::remember($this->getCacheKeyId($value), config('cache.1_month'), fn () => $this->where($key, $value)->first());
    }
}
