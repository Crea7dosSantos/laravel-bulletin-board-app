<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <header class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('') }}">
                お前の掲示板
            </a>
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a href="{{ url('/home') }}">{{ Auth::user()['name'] }}</a>
                @else
                <a href="{{ route('login') }}">ログイン</a>

                @if (Route::has('register'))
                <a class="ml-3" href="{{ route('register') }}">新規登録</a>
                @endif
                @endauth
            </div>
            @endif

        </div>
    </header>

    <div>
        @yield('content')
    </div>
</body>

</html>