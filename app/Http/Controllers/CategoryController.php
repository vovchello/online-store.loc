<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 05.10.18
 * Time: 18:25
 */

namespace App\Http\Controllers;


use App\Shop\Category\Repository\CategoryRerpository;

class CategoryController extends Controller
{
    private $repository;

    /**
     * CategoryController constructor.
     * @param $model
     */
    public function __construct(CategoryRerpository $repository)
    {
        $this->repository = $repository;
    }


    public function index(){
        $categories = $this->repository->all();

        $category = $categories[0];

        return view('front.categories.category',compact('category','categories'));
    }



}
