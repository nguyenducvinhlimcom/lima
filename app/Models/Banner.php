<?php

namespace App\Models;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Banner extends Model
{
    use Cacheable;
    use HasFactory;

    protected $fillable = ['url', 'avatar_file_name', 'order', 'name'];
    public $timestamps = true;


    protected static function boot() :void
    {
        parent::boot();
        static::created(function($model) {
            Cache::forget($model->getCacheKey());
            $model->cacheMany('order');
        });

        static::updated(function($model) {
            Cache::forget($model->getCacheKey());
            $model->cacheMany('order');
        });
        static::deleted(function($model) {
            Cache::forget($model->getCacheKey());
            $model->cacheMany('order');
        });
    }

}
