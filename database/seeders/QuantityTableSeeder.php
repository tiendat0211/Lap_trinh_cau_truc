<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class QuantityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quantity')->insert([
            ['product_id' => 1,
            'size' => 'M',
            'color' => 'Den',
            'quantity' => 10],
            ['product_id' => 2,
            'size' => 'M',
            'color' => 'Den',
            'quantity' => 10],
            ['product_id' => 3,
            'size' => 'M',
            'color' => 'Den',
            'quantity' => 10],
            ['product_id' => 4,
            'size' => 'M',
            'color' => 'Den',
            'quantity' => 10],
            ['product_id' => 1,
            'size' => 'M',
            'color' => 'Trang',
            'quantity' => 10],
            ['product_id' => 2,
            'size' => 'M',
            'color' => 'Trang',
            'quantity' => 10],
            ['product_id' => 3,
            'size' => 'M',
            'color' => 'Trang',
            'quantity' => 10],
            ['product_id' => 4,
            'size' => 'M',
            'color' => 'Trang',
            'quantity' => 10]
        ]);
    }
}
