<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;
use App\User;
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
        DB::table('posts')->insert([
            [
                'title' => "post1",
                'body' => "texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext\ncontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontentscontents",
                'user_id' => 1,
            ],
            [
                'title' => "post2",
                'body' => "texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext\texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextn",
                'user_id' => 2,
            ],
            [
                'title' => "post3",
                'body' => "texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttext\texttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttexttextn",
                'user_id' => 3,
            ]
        ]);
    }
}
