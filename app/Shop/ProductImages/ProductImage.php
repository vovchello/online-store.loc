<?php

namespace App\Shop\ProductImages;

use App\Exceptions\NotImplementedException;
use App\Models\Model;
use App\Shop\Products\Product;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'src'
    ];

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        throw new NotImplementedException();
        // return $this->belongsTo(Product::class);
    }
}
