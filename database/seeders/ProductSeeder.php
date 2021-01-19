<?php

namespace Database\Seeders;

//  import the database for seeding
use Illuminate\Support\Facades\DB;
// import Has for encrypting passwords
use Illuminate\Support\Facades\Hash;


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
        //
        DB::table('products')->insert([
                [
                    'name'=>'LG mobile k92-5g',
                    'price'=>'200',
                    'description'=>'A smartphone with 4gb/64gb',
                    'category' => "mobile",
                    'gallery'=>'https://fdn2.gsmarena.com/vv/pics/lg/lg-k92-5g-1.jpg'
                ],
                [
                    'name'=>'Samsumg mobile galaxy-a51-5g',
                    'price'=>'250',
                    'description'=>'A smartphone with 6/8gb ram 128gb rom',
                    'category' => "mobile",
                    'gallery'=>'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a51-5g-1.jpg'
                ],
                [
                    'name'=>'Mi TV 4A 108cm (43) Horizon Edition ',
                    'price'=>'400',
                    'description'=>'108cm(43) Captivating Horizon Display, Vivid Picture Engine & PatchWall Experience, Immersive Design (Industry Term - Bezel-less Design), Mi Quick Wake Under 5 secs*',
                    'category' => "electronics",
                    'gallery'=>'https://i01.appmifile.com/webfile/globalimg/products/pc/mi-tv-4a-43-horizon/specs-header.png'
                ],
                [
                    'name'=>"LG CX 77 inch Class 4K Smart OLED TV w/ AI ThinQ® (76.7 Diag)",
                    'price'=>'3299.99',
                    'description'=>"Bring home the world’s #1 selling OLED TV. Only OLED pixels emit their own light, allowing for perfect black, intense color and stunning picture. Other TVs pale in comparison. There's LG OLED, then there's everything else.",
                    'category' => "electronics",
                    'gallery'=>'https://www.lg.com/us/images/tvs/md07501089/gallery/large06.jpg'
                ]
        ]);
    }
}
