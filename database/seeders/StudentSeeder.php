<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['student_number' => '邵帅', 'name' => '邵帅'],
            ['student_number' => '殷梓航', 'name' => '殷梓航'],
            ['student_number' => '何书恒', 'name' => '何书恒'],
            ['student_number' => '尚宗洋', 'name' => '尚宗洋'],
            ['student_number' => '周家浩', 'name' => '周家浩'],
            ['student_number' => '徐天佑', 'name' => '徐天佑'],
            ['student_number' => '顾子淇', 'name' => '顾子淇'],
            ['student_number' => '颜炳江', 'name' => '颜炳江'],
            ['student_number' => '杨绍涵', 'name' => '杨绍涵'],
            ['student_number' => '赵奇迹', 'name' => '赵奇迹'],
            ['student_number' => '樊羽', 'name' => '樊羽'],
            ['student_number' => '翟雨童', 'name' => '翟雨童'],
            ['student_number' => '邵涵', 'name' => '邵涵'],
            ['student_number' => '李欣潼', 'name' => '李欣潼'],
            ['student_number' => '陆宇豪', 'name' => '陆宇豪'],
            ['student_number' => '杨建涵', 'name' => '杨建涵'],
            ['student_number' => '杲仕林', 'name' => '杲仕林'],
            ['student_number' => '刘力铭', 'name' => '刘力铭'],
            ['student_number' => '许天阳', 'name' => '许天阳'],
            ['student_number' => '王硕', 'name' => '王硕'],
            ['student_number' => '陈星宇', 'name' => '陈星宇'],
            ['student_number' => '孙海轩', 'name' => '孙海轩'],
            ['student_number' => '孙继航', 'name' => '孙继航'],
            ['student_number' => '曹涵滨', 'name' => '曹涵滨'],
            ['student_number' => '肖楚逊', 'name' => '肖楚逊'],
            ['student_number' => '李鑫航', 'name' => '李鑫航'],
            ['student_number' => '陈子羽', 'name' => '陈子羽'],
        ]);
    }
}
