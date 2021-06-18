<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([ 
            [
                'name' => 'LG Mobile',
                'price' => '5000',
                'category' => 'Electronics',
                'description' => 'LG Mobile G5 Storage 16 GB Ram 2GB Nvidia n96',
                'galary' =>  '',
                'sub_galary' => 'https://www.lg.com/in/images/mobile-phones/md06155776/gallery/D-01_v.jpg',
                
            ],
            [
                'name' => 'Samsung TV',
                'price' => '30000',
                'category' => 'Electronics',
                'description' => 'With this feature',
                'galary' =>  '',
                'sub_galary' => 'https://images.samsung.com/is/image/samsung/in-uhdtv-ru7470-ua65ru7470uxxl-frontsilver-152429044?$720_576_PNG$',
            ],
            [
                'name' => 'Samsung UHD TV',
                'price' => '50000',
                'category' => 'Electronics',
                'description' => 'With this feature',
                'galary' =>  '',
                'sub_galary' => 'https://images.samsung.com/is/image/samsung/in-uhdtv-ru7470-ua65ru7470uxxl-frontsilver-152429044?$720_576_PNG$',
            ],
            [
                'name' => 'oppo Mobile',
                'price' => '5000',
                'category' => 'Electronics',
                'description' => 'LG Mobile G5 Storage 16 GB Ram 2GB Nvidia n96',
                'galary' =>  '',
                'sub_galary' => 'https://i.ytimg.com/vi/opIDqu5t85c/maxresdefault.jpg',

            ],
            ]);
    }
}
