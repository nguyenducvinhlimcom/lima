<?php

namespace App\Models;

use App\Traits\Cacheable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Cache;

class Company extends Model
{
    use HasFactory;
    use Cacheable;

    protected $fillable = [
        'company_name',
        'address',
        'province_id',
        'district_id',
        'ward_id',
        'email',
        'telephone',
        'website',
        'facebook',
        'zalo',
        'google_business',
        'note',
        'description',
        'min_price',
        'max_price',
        'lat',
        'lng',
        'avatar_file_name',
        'keywords_seo'
    ];

    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();
        static::updated(function($model) {
            Cache::forget($model->getCacheKeyId($model->getKey()));
            $model->cacheFind($model->getKey());
        });
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function district() :BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function wards() :HasMany
    {
        return $this->district->hasMany(Ward::class);
    }


}
