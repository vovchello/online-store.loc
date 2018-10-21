<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 20.10.18
 * Time: 15:59
 */

namespace App\Shop\Cart\CartRepository;


use App\Shop\Categories\Category;
use App\Shop\Products\Product;
use Illuminate\Http\Request;

/**
 * Class CartRepository
 * @package App\Shop\Cart\CartRepository
 */
class CartRepository
{
    /**
     * @var Category
     */
    private $category;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var Request
     */
    private $requiest;

    private $param;

    /**
     * CartController constructor.
     * @param $categories
     * @param $products
     */
    public function __construct(Category $category, Product $product,Request $request)
    {
        $this->category = $category;
        $this->product = $product;
        $this->requiest = $request;
    }


    /**
     *
     */
    public function getSession()
    {

    }

    /**
     * @return Category
     */
    public function getCategories()
    {
        return $this->category->with(['images', 'subCategories'])->parent()->get();
    }

    /**
     *
     */
    public function getProducts()
    {
        $requiest = $this->requiest;

        $allProducts = $this->product->all();

        $param = $requiest->session()->get('cart')->all();

//        dd($allProducts);

        $products=collect();

        foreach ($param as $value)
        {
//            dd($value);
            $prod = $allProducts->where('id', $value['product_id'])->first();
            $images = $prod->images()->get()->first();
//            dd($images['src']);
            $cover = $images['src'];

            $product = collect
            ([
                'product' => $prod,
                'quantity' => $value['count'],
                'cover' => $cover
            ]);





            $products->push($product->all());
        }
//        $a = $products[0];
//        dd($a['product']);
        return $products;
    }



    public function destroySession()
    {
        $this->requiest->session()->forget('cart');
    }

    /**
     * @param $request
     */
    public function addToCart($requiest)
    {

        $product = $requiest->input('product');

        if(! ($requiest->session()->has('cart')))
        {

            $cartCollection = collect([['product_id'=> $product,'count' => 1]]);

            $requiest->session()->put('cart',$cartCollection);

            return;
        }



        $cartCollection = $this->requiest->session()->get('cart');

        $param = $cartCollection->where('product_id',$product)->first();

        $cartCollection = $cartCollection->where('product_id','<>',$product);

        if(!(is_null($param)))
        {
            $param['count']++;
            $cartCollection->push(['product_id'=> $product,'count' => $param['count']]);
            $requiest->session()->put('cart',$cartCollection);
            return;
        }

        $cartCollection->push(['product_id'=> $product,'count' => 1]);



        $requiest->session()->put('cart',$cartCollection);

    }

    /**
     * @return mixed
     */
    public function getCartAll()
    {
        return $this->requiest->session()->get('cart');
    }

    /**
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function getCartById(Request $request, $id)
    {
        return $request->session()->get('cart');
    }
}