<?php

namespace App\Services;

use App\Models\Post as ModelPost;

class PostService
{

    public function getPost()
    {
        $posts = ModelPost::orderBy('created_at', 'desc')->get();
        return $posts;
    }
}
