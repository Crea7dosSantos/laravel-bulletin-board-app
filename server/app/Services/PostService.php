<?php

namespace App\Services;

use App\Models\Post as ModelPost;
use Illuminate\Support\Facades\Auth;
use App\Models\User as ModelUser;
use PhpParser\Node\Expr\AssignOp\Mod;

class PostService
{

    public function getPost()
    {
        $posts = ModelPost::orderBy('created_at', 'desc')->get();
        return $posts;
    }
    // Post::with(['comments'])->orderBy('created_at', 'desc')->paginate(10);

    public function getUserName($user_id)
    {
        $user = ModelUser::findOrFail($user_id);
        $name = $user->name;
        return $name;
    }

    public function create($request)
    {
        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);

        ModelPost::create([
            'user_id' => Auth::id(),
            'title' => $params['title'],
            'body' => $params['body'],
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
