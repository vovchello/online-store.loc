<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidp
     */
    public function run()
    {
        $date = new DateTime('now');

        /**
         * Computers category with sub categories
         */

        DB::table('categories')->insert([
            'name'         => 'Electronics',
            'slug'         => 'electronics',
            'description'  => 'All electronics',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'parent_id'     => 1,

            'name'          => 'Laptops',
            'slug'          => 'laptops',
            'description'   => 'Laptops discription',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'parent_id'     => 1,

            'name'          => 'Monitors',
            'slug'          => 'monitors',
            'description'   => 'Monitors Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);

        DB::table('categories')->insert([
            'parent_id'     => 1,

            'name'          => 'Printers',
            'slug'          => 'printers',
            'description'   => 'Printers Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);

        /**
         *id 5
         */

        DB::table('categories')->insert([
            'name'          => 'For Home',
            'slug'          => 'for-home',
            'description'   => 'For Home Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'parent_id'     => 5,

            'name'          => 'Washing machine',
            'slug'          => 'washing-machine',
            'description'   => 'Washing machine Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'parent_id'     => 5,

            'name'          => 'Cooling systems',
            'slug'          => 'cooling-systems',
            'description'   => 'Cooling systems Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
    }
}
