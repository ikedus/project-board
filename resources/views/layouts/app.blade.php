<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar is-black">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="button is-black navbar-burger" data-target="navMenu" >
                  <span></span>
                  <span></span>
                  <span></span>
              </button>
          </div>

          <div class="navbar-menu" id="navMenu">

            <!-- Right Side Of Navbar -->
            <div class="navbar-end">
                <!-- Authentication Links -->
                @guest
                <a class="navbar-item" href="{{ route('login') }}">Login</a>
                <a class="navbar-item" href="{{ route('register') }}">Register</a>
                @else
                <div class="navbar-item has-dropdown is-hoverable">
                    <a href="#" class="navbar-link" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name->name }}
                    </a>

                    <div class="navbar-dropdown is-black" role="menu">
                        <a class="navbar-item" href="{{url('project/new')}}">
                            Nieuw project
                        </a>
                        <a class="navbar-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    
                </div>
            </div>
            @endguest
        </div>
    </div>
</nav>

@yield('content')
</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
