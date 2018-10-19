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
        $categories = $this->category->with(['products'])->get();


        $parentCategories = $categories->where('parent_id',null);

//       dd($parentCategories);

        $category = $categories->where('slug', $slug)->first();

//        dd($category->images[0]->src);

        return view('front.categories.category', [
            'category' => $category,
            'categories' => $parentCategories
        ]);
    }
}
