<?php

namespace App\Models;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache;

class ServiceGroup extends Model
{
    use HasFactory;
    use Cacheable;

    protected $fillable = [
        'name',
        'order',
        'avatar_file_name',
        'slug',
        'name_page',
        'note',
        'description',
        'title_seo',
        'note_seo',
        'keywords_seo',
        'menu_status'
    ];
    public $timestamp = true;

    protected static function boot() :void
    {
        parent::boot();

        static::created(function($model) {
            Cache::forget($model->getCacheKey());
            $model->cacheMany('order');
        });
        static::updated(function($model) {
            Cache::forget($model->getCacheKey());
            Cache::forget($model->getCacheKeyId($model->slug));
            $model->cacheMany('order');
            $model->cacheFindKey($model->slug);
        });
        static::deleted(function($model) {
            Cache::forget($model->getCacheKey());
            Cache::forget($model->getCacheKeyId($model->slug));
            $model->cacheMany('order');
            $model->cacheFindKey($model->slug);
        });
    }

    public function services(): HasMany
    {
        return $this->hasMany(Service::class);
    }
}
