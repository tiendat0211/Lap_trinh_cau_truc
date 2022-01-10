<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1,
            'user_name' => 'Pham Tien Dat'],
            ['id' => 2,
            'user_name' => 'Nguyen Dac Nam'],
            ['id' => 3,
            'user_name' => 'Le Trung Hieu'],
            ['id' => 4,
            'user_name' => 'Nguyen Duy Quang'],
        ]);
    }
}
