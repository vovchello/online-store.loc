<?php

namespace App\Shop\Categories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * @param Builder $query
     * @param string $slug
     *
     * @return Builder
     */
    public function scopeBySlug(Builder $query, string $slug)
    {
        return $query->where('slug', $slug);
    }
}
