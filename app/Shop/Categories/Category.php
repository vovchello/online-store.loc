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
        parent::__construct($attributes);
    }

    /**
     * @return ProductRepository
     */
    public function getProductRepository() {
        return $this->productsRepo ?:
            $this->productsRepo = new ProductRepository(new Product());
    }

    public function products()
    {
        return $this->getProductRepository()->findProductsByCategoryId($this->getAttribute('id'));
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
