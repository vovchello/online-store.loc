<?php

namespace App\Shop\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function getFormatedPriceAttribute(){
        return '$'.$this->price;
    }

    public function setNameAttribute($name){
        $this->attributes['name'] = strtolower($name);
    }

    public function scopeAvaliable($query){
        return $this->where('status', 1);

    }
}
