<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'OVRS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <header class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarProfileContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarProfileContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </header>
        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2" aria-label="Main Navigation">
                    <h5 id="quicknav-heading">Quick Navigation</h5>
                    <dl>
                        <dt><a href="#">About</a></dt>
                        <dd><a href="#">Mission Statement</a></dd>
                        <dd><a href="#">The Classroom</a></dd>
                        <dd><a href="#">Our Success</a></dd>
                        <dd><a href="#">Contact Us</a></dd>
                        <dt><a href="#">Admission</a></dt>
                        <dd><a href="#">Requirements</a></dd>
                        <dd><a href="#">Preperation</a></dd>
                        <dd><a href="#">Application</a></dd>
                        <dd><a href="#">Review Process</a></dd>
                        <dd><a href="#">Admittance</a></dd>
                        <dt><a href="#">Courses</a></dt>
                        <dd><a href="#">Corriculum</a></dd>
                        <dd><a href="#">Electives</a></dd>
                        <dd><a href="#">Programs</a></dd>
                        <dt><a href="#">Donate</a></dt>
                    </dl>
                </nav>

                <main class="py-4 col-md-8">
                    @yield('content')
                </main>
                <aside class="col-md-2">
                    @section('complement')
                        <h3>Related Articles</h3>
                    @show
                </aside>
            </div>
        </div>
    </div>
</body>
</html>
