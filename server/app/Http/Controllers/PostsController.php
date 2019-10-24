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
        $master = [];
        $master['posts'] = $this->service->getAllPost();
        $this->setViewMaster($master);
        return view('posts.index', $this->getViewArray());
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

    public function destroy($post_id)
    {
        $this->service->destroy($post_id);
        return redirect()->route('top');
    }
}
