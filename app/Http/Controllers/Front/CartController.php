<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Shop\Cart\CartRepository\CartRepository;
use App\Shop\Categories\Category;
use App\Shop\Products\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    private $cartRepo;

    /**
     * CartController constructor.
     * @param $cartRepo
     */

    private $requiest;
    public function __construct(CartRepository $cartRepo, Request $requiest)
    {
        $this->cartRepo = $cartRepo;
        $this->requiest = $requiest;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartRepo = $this->cartRepo;

//        $this->requiest->session()->pull('cart');


        $categories = $cartRepo->getCategories();

        $cartItems = $this->cartRepo->getProducts();

//        dd($product);

        return view('front.carts.cart',[
            'categories' => $categories,
            'cartItems' => $cartItems

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->cartRepo->addToCart($request);
//        dd($request);
        return redirect()->route('cart.index')
        ->with('message', 'Add to cart successful');
;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return;
    }
}
