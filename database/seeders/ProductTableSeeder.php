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
            'warehouse_id' => '1',
            'quantity' => 100],
            ['id' => 1,
            'warehouse_id' => '2',
            'quantity' => 100],
            ['id' => 2,
            'warehouse_id' => '1',
            'quantity' => 100],
        ]);
    }
}
