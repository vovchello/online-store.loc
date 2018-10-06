<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 10:59
 */

namespace App\Shop\Product\Repository;


use App\Repositories\BaseRepository;
use App\Shop\Product\Model\ProductModel;

class ProductRepository extends BaseRepository
{

    protected $model;

    /**
     * ProductRepository constructor.
     * @param $model
     */
    public function __construct(ProductModel $model)
    {
        $this->model = $model;
    }


}