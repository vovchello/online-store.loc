<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Category;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;

class HomeController extends Controller
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepo;

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $data = config('dummydata');

        $cat1 = $this->categoryRepo->findCategoryById(1);

        $cat1 = $data['categories'][0];
        $prod1 = $data['products'][0];
        $cat1['products'] = [$prod1];

        $cat2 = $data['categories'][1];
        $cat2['products'] = [];

        return view('front.index', compact('cat1', 'cat2'));
    }
}
