<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime('now');
        DB::table('products')->insert([
            'category_id'   => 1,
            'name'          => 'Samsung AXS200',
            'slug'          => 'samsung-axs200',
            'description'   => 'Samsung notebook',
            'quantity'      => 5,
            'price'         => 15,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 2,
            'name'          => 'Asus Zx10',
            'slug'          => 'asus-zx10',
            'description'   => 'Asus notebook',
            'quantity'      => 2,
            'price'         => 30,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 3,
            'name'          => 'Product 3',
            'slug'          => 'product-3',
            'description'   => 'Description 3',
            'quantity'      => 7,
            'price'         => 340,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 4,
            'name'          => 'Product 4',
            'slug'          => 'product-4',
            'description'   => 'Description 4',
            'quantity'      => 1,
            'price'         => 1,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 5,
            'name'          => 'Product 5',
            'slug'          => 'product-5',
            'description'   => 'Description 4',
            'quantity'      => 12,
            'price'         => 43,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 1,
            'name'          => 'Product 6',
            'slug'          => 'product-6',
            'description'   => 'Description 6',
            'quantity'      => 18,
            'price'         => 128,
            'status'        => 0,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 5,
            'name'          => 'Product 7',
            'slug'          => 'product-7',
            'description'   => 'Description 7',
            'quantity'      => 14,
            'price'         => 87,
            'status'        => 0,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 3,
            'name'          => 'Product 8',
            'slug'          => 'product-8',
            'description'   => 'Description 8',
            'quantity'      => 1,
            'price'         => 9,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 1,
            'name'          => 'Product 9',
            'slug'          => 'product-9',
            'description'   => 'Description 9',
            'quantity'      => 2,
            'price'         => 8,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 4,
            'name'          => 'Product 10',
            'slug'          => 'product-10',
            'description'   => 'Description 10',
            'quantity'      => 5,
            'price'         => 17,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
    }
}
