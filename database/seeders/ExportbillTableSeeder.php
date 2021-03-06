<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ExportbillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exportbills')->insert([
            ['id' => 1,
            'product_id' => 1,
            'admin_id' => 1,
            'quantity' => 10,
            'from' => 1,
            'to' => 2,
            'description' => 'Xuất hàng đến kho Tp.HCM'],
        ]);
    }
}
