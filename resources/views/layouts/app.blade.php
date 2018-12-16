<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('/js/index.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>
<header>
    <h1><a href="{{ url('/') }}">News Assist</a></h1>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}" class="current">Home</a></li>
            <li><a href="{{ route('newsCategory') }}">News Source</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            @if(auth()->user())
                <?php $user = auth()->user() ?>
                {{--{{ $user->name }}--}}
                {{--  what should be displayed if user is logged in --}}
            @else
                <li><a href="login.html" >Log in</a></li>
                <li><a href="#">Sign up</a></li>
            @endif
        </ul>
    </nav>
</header>
<div id="adbanner">

</div>

@yield('content')

<footer>
    <p>Copyright &copy 2018 NewsAssist. All Rights Reserved.</p>
</footer>
</body>
</html>
