<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['id' => 1,
            'product_name' => 'Ao khoac',
            'price' => 500000],
            ['id' => 2,
            'product_name' => 'Ao dai tay',
            'price' => 200000],
            ['id' => 3,
            'product_name' => 'Quan',
            'price' => 100000],
            ['id' => 4,
            'product_name' => 'Ao coc tay',
            'price' => 200000],
        ]);
    }
}
