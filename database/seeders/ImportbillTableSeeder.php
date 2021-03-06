<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ImportbillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('importbills')->insert([
            [
            'product_id' => 1,
            'admin_id' => 1,
            'warehouse_id' => 1,
            'quantity' => 10,
            'description' => 'Nhập hàng vào kho Hà Nội'],
        ]);
    }
}
