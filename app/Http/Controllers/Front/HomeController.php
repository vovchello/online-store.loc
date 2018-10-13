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

        /*$product = [
            'name' => 'Bicycle',
            'slug' => 'bicycle',
            'category_id' => 3,
            'quantity' => 4,
            'price' => 129,
            'status' => true,
            'description' => 'bicycle product'
        ];

        $product = $this->product->create($product);
        dd($product);*/

        $product = $this->product->avaliable();

        dd($product);
        $product = $this->product->where('slug','asus-zx10')->first();
        dd($product->formated_price);

        $category = [
            'name' => 'Bicycle',
            'slug' => 'bicycle',
            'description' => 'bicycle сategory'
        ];
        $category = $this->category->where('slug','bicycle')->delete();

        dd();

        $cat1 = $this->categoryRepo->findCategoryById(1);
        $cat2 = $this->categoryRepo->findCategoryById(2);

        return view('front.index', compact('cat1', 'cat2'));
    }
}
