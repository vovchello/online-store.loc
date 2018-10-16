<?php

namespace App\Shop\Images;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'product_images';

    protected $fillable = [
        'product_id',
        'src'
    ];

    protected $productImageRepo;
}
