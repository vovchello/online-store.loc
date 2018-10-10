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
        //
        DB::table('categories')->insert([
            'name' => 'Category 1',
            'slug' => 'category_1',
            'description' => 'description'
        ]);
    }
}
