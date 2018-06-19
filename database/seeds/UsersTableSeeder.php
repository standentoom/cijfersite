<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'Name' => str_random(10),
            'created_at' =>  date("Y-m-d"),
            'updated_at' =>  date("Y-m-d")
        ]);
    }
}
