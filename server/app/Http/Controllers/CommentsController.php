<?php

namespace App\Http\Controllers;

use App\Http\Requests\Comment\Store as RequestStore;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    protected $service;

    /**
     * Undocumented function
     *
     * @param CommentService $service
     */
    public function __construct(CommentService $service)
    {
        $this->service = $service;
    }

    /**
     * Undocumented function
     *
     * @param RequestStore $request
     * @return void
     */
    public function store(RequestStore $request)
    {
        $post = $this->service->create($request);
        return redirect()->action('PostsController@show', $post->id);
    }
}
