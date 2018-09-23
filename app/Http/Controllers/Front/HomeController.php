<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {

        $data = config('dummydata');

        $cat1 = $data['categories'][0];
        $prod1 = $data['products'][0];
        $cat1['products'] = [$prod1];

        $cat2 = $data['categories'][1];
        $cat2['products'] = [];

        return view('front.index', compact('cat1', 'cat2'));
    }
}
