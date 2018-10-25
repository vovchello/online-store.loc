<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Category;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * @var Category
     */
    private $category;

    /**
     * HomeController constructor.
     *
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @return View
     */
    public function index() {

        $categories = $this->category->with(['images', 'subCategories'])->parent()->get();

            return view('front.index', ['categories' => $categories]);
    }
}
