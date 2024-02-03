<?php

namespace App\Models;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Cache;

class Service extends Model
{
    use HasFactory;
    use Cacheable;

    protected $fillable = [
        'name',
        'order',
        'avatar_file_name',
        'note',
        'service_group_id'
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


    public function serviceGroup(): BelongsTo
    {
        return $this->belongsTo(ServiceGroup::class);
    }
}
