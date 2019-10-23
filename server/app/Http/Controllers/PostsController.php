<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
    protected $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $posts = $this->service->getPost();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        $params = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);


        Post::create([
            'user_id' => Auth::id(),
            'title' => $params['title'],
            'body' => $params['body'],
        ]);

        return redirect()->route('top');
    }
}
