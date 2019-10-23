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

    // post data create
    public function create($request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);

        ModelPost::create($params);
    }
}
