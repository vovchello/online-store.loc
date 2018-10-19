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
        /**
         * Laptops
         */
        DB::table('products')->insert([
            'category_id'   => 2,
            'name'          => 'Acer Aspire One AOD257-13404',
            'slug'          => 'acer-aspire-one-aod257-13404',
            'description'   => 'Atom N455 1.66GHz 1GB 250GB 10.1" LED Netbook Windows 7 Starter w/Webcam (Black)',
            'quantity'      => 5,
            'price'         => 19999,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 2,
            'name'          => 'Toshiba Satellite C55T-B5230',
            'slug'          => 'toshiba satellite c55T-b5230',
            'description'   => 'Touchscreen Celeron N2830 Dual-Core 2.16GHz 4GB 500GB DVD±RW 15.6" Notebook W8.1 w/Cam - C',
            'quantity'      => 2,
            'price'         => 58000,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);

        /**
         * Monitors
         */

        DB::table('products')->insert([
            'category_id'   => 3,
            'name'          => 'Dell E2016HV ',
            'slug'          => 'dell-e2016hv',
            'description'   => 'The Dell E2016HV 19.5 inch Monitor is an apt choice to opt for if you are on the lookout for one. Featuring a massive 49.4 cm screen, the monitor provides you wide viewing angles to enhance your viewing experience. The sturdy stand lets you easily tilt and twist the monitor in any direction you want.',
            'quantity'      => 7,
            'price'         => 34000,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 3,
            'name'          => 'Samsung LC24F390FHWXXL',
            'slug'          => 'samsung-lc24f',
            'description'   => 'The Samsung LC24F390FHWXXL Monitor features a 59.8 cm screen with a resolution of 1920 x 1080 pixels for displaying clear and vivid images. Use this curved monitor at home or office for multitasking without any hassle. With an amazing picture quality and color, this model helps you complete your daily tasks with ease.',
            'quantity'      => 1,
            'price'         => 13000,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);

        DB::table('products')->insert([
            'category_id'   => 4,
            'name'          => 'HP Deskjet 1112',
            'slug'          => 'hp-deskjet-1112',
            'description'   => 'The Energy Star certified HP DeskJet 1112 Printer comes with Original HP high-yield ink cartridges to print a larger volume. With an easy installation process, this compact printer is ideal for home and small business. It comes with Integrated memory and paper handling output is 25 sheets. Print speed black ISO Up to 7.5 ppm, Draft Up to 20 ppm. Print speed color ISO Up to 5.5 ppm, Draft Up to 16 ppm. ',
            'quantity'      => 1,
            'price'         => 13000,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);

        /**
         *  Category for home id 5
         */

        DB::table('products')->insert([
            'category_id'   => 6,
            'name'          => 'IFB',
            'slug'          => 'ifb',
            'description'   => 'IFB 9.5 kg TL-SDG Aqua Washing Machine (Graphite Grey)',
            'quantity'      => 12,
            'price'         => 43000,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 6,
            'name'          => 'Bosch WOE704W0IN',
            'slug'          => 'bosh',
            'description'   => 'Bosch WOE704W0IN 7 kg Top Loading Fully Automatic Washing Machine (White)',
            'quantity'      => 18,
            'price'         => 65000,
            'status'        => 1,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);
        DB::table('products')->insert([
            'category_id'   => 7,
            'name'          => 'Product2 7',
            'slug'          => 'product-7',
            'description'   => 'Description 7',
            'quantity'      => 14,
            'price'         => 87000,
            'status'        => 0,
            'created_at'    => $date,
            'updated_at'    => $date
        ]);

    }
}
