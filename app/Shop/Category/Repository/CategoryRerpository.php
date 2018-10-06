<?php
/**
 * Created by PhpStorm.
 * User: php
 * Date: 06.10.18
 * Time: 10:57
 */

namespace App\Shop\Category\Repository;


use App\Repositories\BaseRepository;
use App\Shop\Category\Model\CategoryModel;

class CategoryRerpository extends BaseRepository
{

    protected $model;

    /**
     * CategoryRerpository constructor.
     * @param $model
     */
    public function __construct(CategoryModel $model)
    {
        $this->model = $model;
    }


}