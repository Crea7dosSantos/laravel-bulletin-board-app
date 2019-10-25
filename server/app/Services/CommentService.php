<?php

namespace App\Services;

use App\Models\Post as ModelPost;
use Illuminate\Support\Facades\Auth;

class CommentService
{

    /**
     * Undocumented function
     *
     * @param [type] $request
     * @return void
     */
    public function create($request)
    {
        $post = ModelPost::findOrFail($request['post_id']);
        $post->comments()->create($request);

        return redirect()->route('posts.show', ['post' => $post]);
    }
}
