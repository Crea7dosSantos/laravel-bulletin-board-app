<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = time();
        DB::table('posts')->insert([
            [
                'title' => "post1",
                'body' => "texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext\ncontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontents",
                'user_id' => 1,
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
