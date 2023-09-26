<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'BALI UNITED FC', 'image' => 'asset/image/product/bali_united.png', 'color' => '#dd4650'],
            ['name' => 'BALI UNITED BASKETBALL', 'image' => 'asset/image/product/bali_united.png', 'color' =>'#dd4650'],
            ['name' => 'KVIBES', 'image' => 'asset/image/product/kvibes.png', 'color' => '#403f3f'],
            ['name' => 'RAHASIA GADIS', 'image' => 'asset/image/product/rahasia_gadis.png', 'color' => '#efbfb3'],
            ['name' => 'LAPER STORY GROUP', 'image' => 'asset/image/product/laper_story.png', 'color' => '#fe9e23'],
            ['name' => 'PARENTING GROUP', 'image' => 'asset/image/product/parenting_group.png', 'color' => '#79bbd7'],
            ['name' => 'MILLENIALS GROUP', 'image' => 'asset/image/product/millenials_group.png', 'color' => '#95656a'],
            ['name' => 'KOMIK DIMSUM', 'image' => 'asset/image/product/komik_dimsum.png', 'color' => '#323452'],
            ['name' => 'BOLA NUSANTARA', 'image' => 'asset/image/product/bola_nusantara.png', 'color' => '#dd4650'],
        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
