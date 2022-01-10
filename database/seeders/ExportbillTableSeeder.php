<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ExportbillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('importbills')->insert([
            ['id' => 1,
            'product_id' => 1,
            'quantity' => 10,
            'color' => 'Den',
            'description' => 'Nhap kho',
            'admin_id' => 1],
            ['id' => 2,
            'product_id' => 2,
            'quantity' => 10,
            'color' => 'Den',
            'description' => 'Nhap kho',
            'admin_id' => 1]
        ]);
    }
}