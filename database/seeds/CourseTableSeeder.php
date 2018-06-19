<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cijfers')->insert([
            'score' => rand(1,10),
            'course' => str_random(10),
            'created_at' =>  date("Y-m-d"),
            'updated_at' =>  date("Y-m-d")
        ]);
    }
}
