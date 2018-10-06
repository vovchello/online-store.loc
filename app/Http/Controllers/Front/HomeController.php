<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\ModelServices\CategoryModelService;
use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;

class HomeController extends Controller
{

    public $repository;

    public function __construct(CategoryModelService $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $cat1 = $this->repository->findCategoryById(0);
        $cat2 = $this->repository->findCategoryById(1);

        return view('front.index', compact('cat1', 'cat2'));
    }
}
