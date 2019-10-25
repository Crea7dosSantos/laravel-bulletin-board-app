<?php

namespace App\Services;

use App\Models\Post as ModelPost;
use Illuminate\Support\Facades\Auth;
use App\Models\User as ModelUser;
use PhpParser\Node\Expr\AssignOp\Mod;

class PostService
{

    public function getAllPost()
    {
        $posts = ModelPost::with(['comments'])->orderBy('created_at', 'desc')->paginate(10);
        return $posts;
    }

    public function create($request)
    {
        ModelPost::create([
            'user_id' => Auth::id(),
            'title' => $request['title'],
            'body' => $request['body'],
        ]);
    }

    public function search($id)
    {
        return ModelPost::findOrFail($id);
    }

    public function destroy($id)
    {
        $post = ModelPost::findOrFail($id);

        \DB::transaction(function () use ($post) {
            $post->comments()->delete();
            $post->delete();
        });
    }
}
