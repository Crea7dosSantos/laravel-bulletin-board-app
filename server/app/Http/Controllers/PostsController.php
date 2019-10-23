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
        $this->service->create($request);
        return redirect()->route('top');
    }

    public function show($post_id)
    {
        $post = $this->service->search($post_id);
        return view('posts.show', ['post' => $post]);
    }
}
