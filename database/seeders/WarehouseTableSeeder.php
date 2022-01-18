<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WarehouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warehouses')->insert([
            ['id' => 1,
            'warehouse_name' => 'Kho Hà Nội',
            'address' => 'Hà Nội'],
            ['id' => 2,
            'warehouse_name' => 'Kho Tp Hồ Chí Minh',
            'address' => 'Hồ Chí Minh'],
            ['id' => 3,
            'warehouse_name' => 'Kho đặc biệt',
            'address' => 'Hà Nội'],
        ]);
    }
}
