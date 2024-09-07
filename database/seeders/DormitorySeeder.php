<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DormitorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('dormitories')->truncate(); // 清空宿舍表

        DB::table('dormitories')->insert([
            ['name' => '516', 'capacity' => 3, 'current_count' => 0],
            ['name' => '523', 'capacity' => 6, 'current_count' => 0],
            ['name' => '524', 'capacity' => 6, 'current_count' => 0],
            ['name' => '525', 'capacity' => 6, 'current_count' => 0],
            ['name' => '526', 'capacity' => 6, 'current_count' => 0],
        ]);
    }
}
