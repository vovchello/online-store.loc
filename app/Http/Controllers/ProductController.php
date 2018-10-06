<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 18:25
 */

namespace App\Http\Controllers;


use App\Services\ModelServices\ProductModelService;

class ProductController extends Controller
{
    private $service;

    /**
     * CategoryController constructor.
     * @param $model
     */
    public function __construct(ProductModelService $service)
    {
        $this->service = $service;
    }


    public function index(){
        $products = $this->service->getAll();

        $product = $products[0];

        return view('front.products.product',compact('product','products'));
    }


}
