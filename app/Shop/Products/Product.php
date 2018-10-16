<?php

namespace App\Shop\Products;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Shop\Products
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Gets formated price. From cents to dollars
     *
     * @return string
     */
    public function getFormattedPriceAttribute(){

        $price = $this->price /100;
        return '$'.$price;
    }

    /**
     * sets product name in lower register
     *
     * @param $name
     */
    public function setNameAttribute($name){

        $this->attributes['name'] = strtolower($name);
    }

    /**
     * Sets slung form name
     *
     * @param $slug
     */
    public function setSlugAttribute($slug){

        $slug = trim($slug);

        $slug = str_replace(' ','-',$slug);

        $this->attributes['slug'] = strtolower($slug);
    }

    /**
     * Sets product name from dollars to cents
     *
     * @param $price
     */
    public function setPriceAttribute($price){

        $price = $price * 100;

        $this->attributes['price'] =(int) $price;

    }

    /**
     * Find all available products
     *
     * @param $query
     * @return mixed
     */
    public function scopeAvailable($query){

        return $this->where('status', 1);

    }

    /**
     * Find product by name
     *
     * @param $name
     * @return mixed
     */
    public function scopeFindByName($query,$name){

        return $this->where('name',$name);
    }

    /**
     * Find product by category id
     *
     * @param $query
     * @param $category
     * @return mixed
     */
    public function scopeFindByCategory($query, $categoryId){
        return $this->where('category_id',$categoryId);
    }

    /**
     * Find product by slug
     *
     * @param $query
     * @param $slug
     * @return mixed
     */
    public function scopeFindBySlug($query, $slug){

        return $this->where('slug',$slug);
    }

    /**
     * Find product by quantity
     *
     * @param $query
     * @param $quantaty
     * @return mixed
     */
    public function scopeFindByQuantity($query, $quantity){

        return $this->where('quantity',$quantity);
    }


    /**
     * Find product by price
     *
     * @param $query
     * @param $price
     * @return mixed
     */
    public function scopeFindByPrice($query, $price){

        return $this->where('price',$price);
    }

    /**
     * Find product by id
     *
     * @param $query
     * @param $id
     * @return mixed
     */
    public function scopeFindById($query, $id){

        return $this->where('id',$id);

    }

    /**
     * Find products which price is greater then $price
     *
     * @param $query
     * @param $price
     * @return mixed
     */
    public function scopeFindPriceGreater($query, $price){

        return $this->where('price','>',$price);
    }

    /**
     * Find products which price is lower then $price
     *
     * @param $query
     * @param $price
     * @return mixed
     */
    public function scopeFindPriceLower($query, $price){

        return $this->where('price','<',$price);
    }

    /**
     * Find products which quantity is lower then $quantity
     *
     * @param $query
     * @param $quantity
     * @return mixed
     */
    public function scopeFindQuantityLower($query, $quantity){

        return $this->where('quantity','<',$quantity);
    }




}
