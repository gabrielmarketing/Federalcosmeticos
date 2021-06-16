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
        'image'         => 'images/produtos/v8.png',
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

        $product5 =Products::create([
            'name'          => 'BLACK',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/black.png',
            'price'         => 10,
        ]);

        $product6 =Products::create([
            'name'          => 'MUSTANG',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/mustang.png',
            'price'         => 10,
        ]);

        $product7 =Products::create([
            'name'          => 'BLACKOUT',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/blackout.png',
            'price'         => 10,
        ]);

        $product8 =Products::create([
            'name'          => 'ÔMEGA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/omega.png',
            'price'         => 10,
        ]);

        $product9 =Products::create([
            'name'          => 'APOLLO',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/apollo.png',
            'price'         => 10,
        ]);

        $product10 =Products::create([
            'name'          => 'DRAGON',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/dragon.png',
            'price'         => 10,
        ]);

        $product11 =Products::create([
            'name'          => 'SPEED',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/speed.png',
            'price'         => 10,
        ]);

        $product12 =Products::create([
            'name'          => 'SCORPION',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/scorpion.png',
            'price'         => 10,
        ]);

        $product13 =Products::create([
            'name'          => 'OWEN',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/owen.png',
            'price'         => 10,
        ]);

        $product14 =Products::create([
            'name'          => 'FOX',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/fox.png',
            'price'         => 10,
        ]);

        $product15 =Products::create([
            'name'          => 'TIGER',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/tiger.png',
            'price'         => 10,
        ]);

        $product16 =Products::create([
            'name'          => 'FUSION',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/fusion.png',
            'price'         => 10,
        ]);

        $product17 =Products::create([
            'name'          => 'V8',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/v8.png',
            'price'         => 10,
        ]);

        $product18 =Products::create([
            'name'          => 'HIPNO',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/hipno.png',
            'price'         => 10,
        ]);

        $product19 =Products::create([
            'name'          => 'WOLF',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/wolf.png',
            'price'         => 10,
        ]);

        $product20 =Products::create([
            'name'          => 'INVICTO',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/invicto.png',
            'price'         => 10,
        ]);

        $product21 =Products::create([
            'name'          => 'FALCON',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/falcon.png',
            'price'         => 10,
        ]);

        $product22 =Products::create([
            'name'          => 'IMPALA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/impala.png',
            'price'         => 10,
        ]);

        $product23 =Products::create([
            'name'          => 'AFRODITE',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/afrodite.png',
            'price'         => 10,
        ]);

        $product24 =Products::create([
            'name'          => 'labelle',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/labelle.png',
            'price'         => 10,
        ]);

        $product25 =Products::create([
            'name'          => 'ANGELS',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/angels.png',
            'price'         => 10,
        ]);

        $product26 =Products::create([
            'name'          => 'LINDA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/linda.png',
            'price'         => 10,
        ]);

        $product27 =Products::create([
            'name'          => 'SEXY LADY',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/sexylady.png',
            'price'         => 10,
        ]);

        $product28 =Products::create([
            'name'          => 'MON CHÉRI',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/moncherie.png',
            'price'         => 10,
        ]);

        $product29 =Products::create([
            'name'          => 'CONNECTED',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/connected.png',
            'price'         => 10,
        ]);

        $product30 =Products::create([
            'name'          => 'OLYMPIA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/olympia.png',
            'price'         => 10,
        ]);

        $product31 =Products::create([
            'name'          => 'GUERREIRA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/guerreira.png',
            'price'         => 10,
        ]);

        $product32 =Products::create([
            'name'          => 'DEUSA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/deusa.png',
            'price'         => 10,
        ]);

        $product33 =Products::create([
            'name'          => 'ROYAL GIRL',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/royalgirl.png',
            'price'         => 10,
        ]);

        $product34 =Products::create([
            'name'          => 'TOP 5',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/top5.png',
            'price'         => 10,
        ]);

        $product35 =Products::create([
            'name'          => 'RUBI',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/rubi.png',
            'price'         => 10,
        ]);

        $product36 =Products::create([
            'name'          => 'SARAH',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/sarah.png',
            'price'         => 10,
        ]);

        $product37 =Products::create([
            'name'          => 'FENIX',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/fenix.png',
            'price'         => 10,
        ]);

        $product38 =Products::create([
            'name'          => 'PAIXÃO',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/paixao.png',
            'price'         => 10,
        ]);

        $product39 =Products::create([
            'name'          => 'AURORA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/aurora.png',
            'price'         => 10,
        ]);

        $product40 =Products::create([
            'name'          => 'PODEROSA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/poderosa.png',
            'price'         => 10,
        ]);

        $product41 =Products::create([
            'name'          => 'LOVE',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/love.png',
            'price'         => 10,
        ]);

        $product42 =Products::create([
            'name'          => 'CHEIROSA',
            'descripition'  => 'perfume amadeirado',
            'weight'        => '0,50',
            'image'         => 'images/produtos/cheirosa.png',
            'price'         => 10,
        ]);
    }
}
