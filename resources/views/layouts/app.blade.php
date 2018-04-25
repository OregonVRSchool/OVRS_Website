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
    <!-- <script src="{{ asset('js/bootstrap.js') }}" defer></script> -->
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
        <header class="navbar navbar-expand-md navbar-laravel">
            <div class="container">                

                <div class="collapse navbar-collapse" id="navbarProfileContent">
                    <!-- Left Side Of Header -->
                    <ul class="mr-auto">
                        <a class="" href="{{ url('/') }}">
                            <div class="fancy-title">{{ config('app.name', 'Laravel') }}</div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarProfileContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </ul>

                    <!-- Right Side Of Header -->
                    <ul class="ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('cms') }}">
                                        CMS
                                    </a>
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
                    <div class="dropdown-list">
                        <div class="dropdown">
                            <button class="dropbtn">About</button>
                            <div class="dropdown-content">
                                <a href="#">Mission Statement</a>
                                <a href="#">The Classroom</a>
                                <a href="#">Our Success</a>
                                <a href="#">Contact Us</a>
                            </div>    
                        </div>
                        <div class="dropdown">                    
                            <button class="dropbtn">Admission</button>
                            <div class="dropdown-content">
                                <a href="#">Requirements</a>
                                <a href="#">Preperation</a>
                                <a href="#">Application</a>
                                <a href="#">Review Process</a>
                                <a href="#">Admittance</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <button class="dropbtn">Courses</button>
                            <div class="dropdown-content">
                                <a href="#">Corriculum</a>
                                <a href="#">Electives</a>
                                <a href="#">Programs</a>
                            </div>
                        </div>
                        <div class="dropdown">    
                            <button class="dropbtn">Donate</button>
                            <div class="dropdown-content">
                                <a href="#">Time</a>
                                <a href="#">Finacially</a>
                            </div>
                        </div>
                    </div>                    
                </nav>

                <main class="col-md-8">
                    @section('content')
                    @show
                </main>
                <aside class="col-md-2">
                    @section('complement')
                        <h3>Related Articles</h3>
                        <div class="carosel">
                            <a href="">
                                <img src="">
                                <div>
                                    <div class="title">
                                        
                                    </div>
                                    <p>
                                        
                                    </p>
                                </div>
                            </a>
                        </div>
                    @show
                </aside>
            </div>
            <div class="row">
                <footer>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $("dropdown").hover(function(){
                                $(this).find("dropdown-content").css("background-color", "red");
                            }, function(){
                                $(this).css("visibility", "hidden");
                            });
                        });
                    </script>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
