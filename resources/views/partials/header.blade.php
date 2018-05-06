
<div id="app">
    <header class="navbar navbar-expand-md navbar-laravel fixed-top">
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
                                @if(Auth::user()->permission->title == 'superAdmin')
                                    <a class="dropdown-item" href="{{ route('cms') }}">
                                        CMS
                                    </a>
                                @endif
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