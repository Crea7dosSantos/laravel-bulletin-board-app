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
        DB::table('users')->insert([
            [
                'email' => 'hoge@gmail.com',
                'password' => bcrypt('secret'),
                'name' => 'hogehoge',
                'gender_id' => 1
            ],
            [
                'email' => 'huge@gmail.com',
                'password' => bcrypt('secret'),
                'name' => 'hugehuge',
                'gender_id' => 2
            ],
            [
                'email' => 'hege@gmail.com',
                'password' => bcrypt('secret'),
                'name' => 'hegehege',
                'gender_id' => 3
            ]
        ]);
    }
}
