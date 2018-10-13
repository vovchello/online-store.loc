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
            'name'         => 'Category 1',
            'slug'         => 'category_1',
            'description'  => 'description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'name'          => 'Category 2',
            'slug'          => 'category-2',
            'description'   => 'Category 2 Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'name'          => 'Category 3',
            'slug'          => 'category-3',
            'description'   => 'Category 3 Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'name'          => 'Category 4',
            'slug'          => 'category-4',
            'description'   => 'Category 4 Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
        DB::table('categories')->insert([
            'name'          => 'Category 5',
            'slug'          => 'category-5',
            'description'   => 'Category 5 Description',
            'created_at'    => $date,
            'updated_at'    => $date

        ]);
    }
}
