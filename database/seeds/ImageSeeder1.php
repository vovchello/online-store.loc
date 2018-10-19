<?php

use Illuminate\Database\Seeder;

class ImageSeeder1 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = new DateTime('now');

        DB::table('images')->insert([
            'product_id'    => 1,
            'src'          => 'product1.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 2,
            'src'          => 'product2.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 3,
            'src'          => 'product3.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 4,
            'src'          => 'product4.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 5,
            'src'          => 'product5.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 6,
            'src'          => 'product6.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 7,
            'src'          => 'product7.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 8,
            'src'          => 'product8.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 9,
            'src'          => 'product9.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 10,
            'src'          => 'product10.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
    }
}
