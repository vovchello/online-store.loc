<?php
/**
 * Created by PhpStorm.
 * User: panda
 * Date: 23.10.18
 * Time: 22:19
 */

namespace App\Shop\Categories\Repository;


use App\Shop\Categories\Category;

/**
 * Class CategoryRepository
 * @package App\Shop\Categories\Repository
 */
class CategoryRepository
{
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryRepository constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }


    /**
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->category->with('products')->get();
    }

    /**
     * @param int $id
     * @return Category
     */
    public function findProductById(int $id) : Category
    {
        return $this->category->where('id',$id)->first();
    }


    /**
     * @param array $slug
     * @return Category
     */
    public function findProductBySlug(string $slug) : Category
    {
        return $this->category->BySlug($slug);

    }

    /**
     * @return Category[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function findProductImages()
    {
        return $this->category->with('images')->get();
    }

    /**
     * @return mixed
     */
    public function getParentCategories()
    {
        return $this->category->with(['images', 'subCategories'])->parent()->get();
    }
}