<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Category;

class CategoryController extends Controller
{
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryController constructor.
     *
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Find the category via the slug
     *
     * @param string $slug
     *
     * @return Category
     */
    public function getCategory(string $slug)
    {
        $categories = $this->category->all();
        $category = $categories->where('slug', $slug)->first();

//        $products = $category->products()->where('status', 1)->all();

        return view('front.categories.category', [
            'categories' => $categories,
            'category' => $category,
            'products' => null //$products
        ]);
    }
}
