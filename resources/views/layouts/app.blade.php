<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <script src="{{ asset('js/vanilla.js') }}" defer></script>
    <script src="{{ asset('js/nav.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div id="app">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="container">
                    <div class="navbar-brand">
                      <a class="navbar-item" href="https://bulma.io">
                        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                      </a>
                  
                      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                      </a>
                    </div>
                  
                    <div id="navbarBasicExample" class="navbar-menu">
                      <div class="navbar-start">
                      
                  
                      
                      </div>
                  
                      <div class="navbar-end">
                        <div class="navbar-item">
                                
                            @guest
                          <div class="buttons">
                            <a class="button" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                          @if(Route::has('register')) 
                           <a class="button is-success" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                          </div>
                        </div>
                        @endif
                        @else
                        {{-- if user login --}}
                        <div class="navbar-item has-dropdown is-hoverable">
                            
                                <a class="navbar-link" >
                                        
                                       <span>{{ Auth::user()->name }}</span>  
                                </a>
                        
                                <div class="navbar-dropdown">
                              
                                        
                                        <a class="navbar-item">
                                          Report an issue
                                        </a>
                                        <hr class="navbar-divider">
                                        <a class="navbar-item">
                                                Change Password
                                              </a>
                                             

                                  <a class="navbar-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                   {{ __('Keluar') }}
                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                  </a>

                                 
                                 
                                
                                </div>
                              </div>
                              <span class="icon is-small">
                                    <i class="fa fa-user"></i>
                                  </span>
                      </div>
                      @endguest
                    </div>
                </div>
                  </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


{{--      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </nav> --}}