<?php

namespace App\Shop\Categories\Repositories\Interfaces;

use App\Interfaces\BaseRepositoryInterface;
use App\Shop\Categories\Category2;
//use App\Shop\Products\Product2;
use Illuminate\Support\Collection;

interface CategoryRepositoryInterface extends BaseRepositoryInterface
{
    public function listCategories(string $order = 'id', string $sort = 'desc', $except = []) : Collection;

    public function createCategory(array $params) : Category2;

//    public function updateCategory(array $params) : Category2;

    public function findCategoryById(int $id) : Category2;

    /*public function deleteCategory() : bool;

    public function associateProduct(Product2 $product);

    public function syncProducts(array $params);

    public function detachProducts();

    public function deleteFile(array $file, $disk = null) : bool;*/

    public function findProducts() : Collection;

    public function findCategoryBySlug(string $slug) : Category2;
}
