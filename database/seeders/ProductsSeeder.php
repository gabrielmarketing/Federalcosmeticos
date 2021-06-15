<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $product1 =Products::create([
        'name'          => 'V8',
        'descripition'  => 'perfume amadeirado',
        'weight'        => '0,50',
        'image'         => 'images/produtos/v8_v1.png',
        'price'         => 10,
        ]);

        $product2 =Products::create([
            'name'          => 'DIPLOMATA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/diplomata.png',
            'price'         => 10,
        ]);

        $product3 =Products::create([
            'name'          => 'ALFA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/alfa.png',
            'price'         => 10,
        ]);

        $product4 =Products::create([
            'name'          => 'LION',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/lion.png',
            'price'         => 10,
        ]);
    }
}
