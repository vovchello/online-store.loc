<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Shop\Products\Product;
use Illuminate\Support\Facades\DB;
use App\Shop\Categories\Category;

/**
 * Class HomeController
 * @package App\Http\Controllers\Front
 */
class HomeController extends Controller
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepo;
    private $product;

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(Category $category,Product $product )
    {
        $this->category = $category;
        $this->product = $product;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $product= $this->product->FindByCategory(3)->get();

        dd($product);

        $cat1 = $this->categoryRepo->findCategoryById(1);
        $cat2 = $this->categoryRepo->findCategoryById(2);

        return view('front.index', compact('cat1', 'cat2'));
    }
}
