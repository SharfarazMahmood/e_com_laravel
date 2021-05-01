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
                ],
                [
                    "name" => "Book",
                    "price" => '9.99',
                    "description" => "You can read it!",
                    "category" => "Book",
                    "gallery" => "https://images.unsplash.com/photo-1544947950-fa07a98d237f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
                ],
                [
                    "name" => "Backpack",
                    "price" => '79.99',
                    "description" => "Carry things around town!",
                    "category" => "Utilities",
                    "gallery" => "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
                    
                ],
                [
                    "name" => "Glasses",
                    "price"=> '129.99',
                    "description" => "Now you can see!",
                    "category" => "Utilities",
                    "gallery" => "https://images.unsplash.com/photo-1591076482161-42ce6da69f67?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
                ],
                [
                    "name" => "Cup",
                    "price" => '4.99',
                    "gallery" => "https://images.unsplash.com/photo-1517256064527-09c73fc73e38?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
                    "description" => "Drink anything with it!",
                    "category" => "Cookeries"
                ],
                [
                    "name"=> "Shirt",
                    "price" => '29.99',
                    "gallery" => "https://images.unsplash.com/photo-1581655353564-df123a1eb820?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=800&q=80",
                    "description"=> "Wear it with style!",
                    "category" => "Clothes"
                ]
        ]);
    }
}
