@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar sticky-top" style="height: 600px">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('customer.index') }}">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('customer.post.index') }}">
                                Posts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('auth.logout') }}">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="col col-9 ml-5 mt-5">
                @yield('main_content')
            </div>
        </div>
@endsection
