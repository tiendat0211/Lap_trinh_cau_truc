<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            ['id' => 1,
            'admin_name' => 'Pham Tien Dat'],
            ['id' => 2,
            'admin_name' => 'Nguyen Dac Nam'],
            ['id' => 3,
            'admin_name' => 'Le Trung Hieu'],
            ['id' => 4,
            'admin_name' => 'Nguyen Duy Quang'],
        ]);
    }
}
