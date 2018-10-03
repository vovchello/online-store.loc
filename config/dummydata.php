<?php

return [

    /*
     * Categories
     */

    'categories' => [
        0 => [
            'id'            => 0,
            'name'          => 'Category 1',
            'slug'          => 'category-1',
            'description'   => 'Category 1 Description',
        ],
        1 => [
            'id'            => 1,
            'name'          => 'Category 2',
            'slug'          => 'category-2',
            'description'   => 'Category 2 Description',
        ],
    ],

    /*
     * Products
     */

    'products' => [
        0 => [
            'id'            => 0,
            'category_id'   => 0,
            'name'          => 'Product 1',
            'slug'          => 'product-1',
            'description'   => 'Description 1',
            'cover'         => 'product.png',
            'quantity'      => 1,
            'price'         => 1.5,
            'status'        => 1
        ],
        1 => [
            'id'            => 1,
            'category_id'   => 0,
            'name'          => 'Product 2',
            'slug'          => 'product-2',
            'description'   => 'Description 2',
            'cover'         => 'product.png',
            'quantity'      => 1,
            'price'         => 1.5,
            'status'        => 1
        ]
    ],

    /*
     * Product Images
     */

    'product_images' => [
        0 => [
            'id'            => 0,
            'product_id'    => 0,
            'src'          => 'product1.jpg'
        ],
        1 => [
            'id'            => 1,
            'product_id'    => 1,
            'src'          => 'product2.jpg'
        ]
    ]

];