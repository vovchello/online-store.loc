<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        /*$cat1 = $this->categoryRepo->findCategoryById(0);
        $cat2 = $this->categoryRepo->findCategoryById(1);*/

        $cat1 = [
            'id'            => 0,
            'name'          => 'Category 1',
            'slug'          => 'category-1',
            'description'   => 'Category 1 Description',
        ];

        $cat2 = [
            'id'            => 1,
            'name'          => 'Category 2',
            'slug'          => 'category-2',
            'description'   => 'Category 2 Description',
        ];

        return view('front.index', compact('cat1', 'cat2'));
    }
}
