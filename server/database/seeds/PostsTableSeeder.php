<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => "post1",
                'body' => "texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext\ncontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontents",
                'user_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title' => "post2",
                'body' => "texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext\texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextn",
                'user_id' => 2,
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title' => "post3",
                'body' => "texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext\texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextn",
                'user_id' => 3,
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ]);
    }
}
