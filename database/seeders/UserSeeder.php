<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

//  import the database for seeding
use Illuminate\Support\Facades\DB;
// import Hash for encrypting passwords
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //put data in the DB
        // DB::table('users')->insert([
        //     'first_name'=>'sharfaraz',
        //     'last_name'=>'mahmood',
        //     'email'=>'sharfarazmahmood@gmail.com',
        //     'password'=>Hash::make('123')
        // ]);
        DB::table('users')->insert([
            'first_name'=>'ja',
            'last_name'=>'mee',
            'email'=>'jamee@gmail.com',
            'password'=>Hash::make('123')
        ]);
    }
}
