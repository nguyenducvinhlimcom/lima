<?php

namespace App\Models;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Feedback extends Model
{
    use HasFactory;
    use Cacheable;

    protected $fillable = [
        'name',
        'job',
        'content',
        'order',
        'avatar_file_name'
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
            $model->cacheMany('order');
        });
        static::deleted(function($model) {
            Cache::forget($model->getCacheKey());
            $model->cacheMany('order');
        });
    }
}
