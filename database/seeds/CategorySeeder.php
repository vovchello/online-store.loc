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

        DB::table('categories')->insert([
            'name'         => 'Category2 1',
            'slug'         => 'category_1',
            'description'  => 'description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'name'          => 'Category2 2',
            'slug'          => 'category-2',
            'description'   => 'Category2 2 Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'name'          => 'Category2 3',
            'slug'          => 'category-3',
            'description'   => 'Category2 3 Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'name'          => 'Category2 4',
            'slug'          => 'category-4',
            'description'   => 'Category2 4 Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'name'          => 'Category2 5',
            'slug'          => 'category-5',
            'description'   => 'Category2 5 Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
    }
}
