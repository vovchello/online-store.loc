<?php

namespace App\Shop\Categories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * @package App\Shop\Categories
 */
class Category extends Model
{
    /**
     * @var array
     */
    protected $fillable= [
        'name',
        'slug',
        'description',
        'parent_id'
    ];

    /**
     * Sets slung from name
     *
     * @param $slug
     */
    public function setSlugAttribute($slug){
        $slug = trim($slug);

        $slug = str_replace(' ','-',$slug);

        $this->attributes['slug'] = strtolower($slug);
    }

    /**
     *Find category by name
     *
     * @param $category
     * @return mixed
     */
    public function scopeFindByName($category){

        return $this->where('name',$category);

    }

    /**
     * Find category by id
     *
     * @param $id
     * @return mixed
     */
    public function scopeFindById($id){

        return $this->where('id',$id);

    }



}
