<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Products\Product;
use App\Shop\Products\Repositories\ProductRepository;
use App\Shop\Products\Transformations\ProductTransformable;

class ProductController extends Controller
{
    use ProductTransformable;

    /**
     * @var ProductRepository
     */
    private $productRepo;

    /**
     * ProductController constructor.
     * @param ProductRepository $productRepo
     */
    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }
}
