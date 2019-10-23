<?php

namespace App\Services;

use App\Models\Post as ModelPost;

class PostService
{

    public function getPost()
    {
        return ModelPost::all();
    }
}
