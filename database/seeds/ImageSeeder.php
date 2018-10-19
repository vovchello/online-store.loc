<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
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
            'src'          => 'toshiba.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 2,
            'src'          => 'acer-laptop.jpg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 3,
            'src'          => 'samsung -monitor.jpeg',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 4,
            'src'          => 'ifb-mashine.png',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 5,
            'src'          => 'hp-printer.png',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 6,
            'src'          => 'dell-monitor.png',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('images')->insert([
            'product_id'    => 7,
            'src'          => 'bosch-maschine.png',
            'created_at'    => $date,
            'updated_at'    => $date
        ]);

    }
}
