<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'prefix',
        'province_id'
    ];

    /**
     * Get all of the comments for the District
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wards(): HasMany
    {
        return $this->hasMany(Ward::class);
    }
}
