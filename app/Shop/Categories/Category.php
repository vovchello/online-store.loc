<?php

namespace App\Shop\Categories;

// use App\Shop\Products\Product;

use App\Exceptions\NotImplementedException;
use App\Models\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'cover'
    ];

    protected $table = 'categories';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    public function products()
    {
        throw new NotImplementedException();
    }

    public function parent()
    {
        throw new NotImplementedException();
    }

    public function children()
    {
        throw new NotImplementedException();
    }
}
