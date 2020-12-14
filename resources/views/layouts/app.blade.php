<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  @if(App::getLocale() == 'fa') dir="rtl" @endif>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('css')

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>

    <ul class="navbar-nav">
        @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown">
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('admin.index') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a>
            </div>
        </li>
        @else
        <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.show.form') }}">Login Or Register</a>
        </li>
        @endauth
    </ul>
</nav>

@yield('content')

@stack('js')
</body>
</html>
