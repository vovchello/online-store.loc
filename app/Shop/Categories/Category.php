<?php

namespace App\Shop\Categories;

// use App\Shop\Products\Product;

use App\Exceptions\NotImplementedException;
use App\Models\Model;
use App\Shop\Products\Product;
use App\Shop\Products\Repositories\ProductRepository;

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

    protected $productsRepo;

    public function __construct(array $attributes = [])
    {
        $this->productsRepo = new ProductRepository(new Product());

        parent::__construct($attributes);
    }

    public function products()
    {
        return $this->productsRepo->findProductsByCategoryId($this->getAttribute('id'));
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
