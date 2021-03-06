@extends('../layouts.layout')
@inject('userService', 'App\Services\UserService')

@section('content')
<div class="container mt-4">
    <div class="mb-4">
        @if (Auth::check())
        <a href="{{ route('create') }}" class="btn btn-primary">
            投稿を新規作成する
        </a>
        @else
        <a href="{{ route('login') }}" class="btn btn-primary">
            ログインして投稿を作成する
        </a>
        @endif
    </div>
    <?php if (Auth::check()) {
        $id = Auth::id();
    } ?>
    @foreach ($master['posts'] as $key => $post)
    <div class="card mb-4">
        <div class="card-header clearfix">
            {{ $post->title }} by:
            <?php $user_id = $post->user_id;
            ?>
            {{ $userService->getUserName($user_id) }}
            @if (Auth::check() && $post->user_id == $id)
            <a class="btn btn-danger float-right" href="{{ action('PostsController@destroy', $post->id) }}">
                削除する
            </a>
            @endif
        </div>
        <img alt="ロゴ" src="{{ asset($post->image_path) }}">
        <div class="card-body">
            <p class="card-text">
                {!! nl2br(e(Str::limit($post->body, 200))) !!}
            </p>
            <a class="card-link" href="{{ action('PostsController@show', $post->id) }}">
                続きを読む
            </a>
        </div>
        <div class="card-footer">
            <span class="mr-2">
                投稿日時 {{ $post->created_at->format('Y.m.d') }}
            </span>

            @if ($post->comments->count())
            <span class="badge badge-primary">
                コメント {{ $post->comments->count() }}件
            </span>
            @endif
        </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-center mb-5">
        {{ $master['posts'] }}
    </div>
</div>
@endsection