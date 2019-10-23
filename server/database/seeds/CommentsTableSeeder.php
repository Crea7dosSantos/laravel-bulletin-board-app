<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'body' => "commentscommentscommentscomments",
                'user_id' => 1,
                'post_id' => 1,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'body' => "commentscommentscommentscomments",
                'user_id' => 2,
                'post_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'body' => "commentscommentscommentscomments",
                'user_id' => 2,
                'post_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
