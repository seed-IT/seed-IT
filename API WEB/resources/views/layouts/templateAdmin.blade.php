<!DOCTYPE html>

<html lang="fr">
        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Admin | Seed-it</title>
                <link href="{{ asset('css/default.css') }}" rel="stylesheet">
                <link href="{{ asset('css/boutique.css') }}" rel="stylesheet">
        @yield('contenu')
<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
                <script src="{{ asset('js/app.js') }}" defer></script>
                <meta name="csrf-token" content="{{ csrf_token() }}">
        </head>
        <body>
                <div id="header" class="container">
                        <div id="logo">
                                <h1><a href="#"><img src="{{ asset('images/seed-it-logo.png') }}" /></a></h1>
                        </div>

                        <div id="menu" class="nav">
                                <ul>
                                        <li><a href="{{url('accueil')}}">Acceuil</a></li>
                                        <li><a href="{{url('seedit')}}">Seed-IT</a></li>
                                        <li><a href="{{url('post')}}">Boutique</a></li>
                                        @if(Auth::guest())
                                        <li><a href="{{url('login')}}">Connexion</a></li>
                                        @endif

                                        <li><a href="{{url('contact')}}">Contact</a></li>

                                         @if(Auth::check())
                                                        <li> <a href="{{url('home')}}"> Mon profil </a> </li>
                                                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>                                    
									<font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                        {{ Auth::user()->name }} </font> <span class="caret"></span>
                                                                                </font>

                                                                        <pseudo:after></<pseudo:after>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                                                <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                           {{ __('Logout') }}
                                                                           </font>
                                                                           </font>                                                                                                                                      
									</a>
                                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                        @endif
                    @if(Auth::check() and Auth::user()->admin)
                                </ul>
                        </div>

                </div>
                   @yield('header')
      </div>
    </header>

                <div id="page">
                <div class="main">
         @yield('content')
                </div>
                </div>
@endif

                <div id="copyright" class="container">
                        <p>2019-2020 &copy; All rights reserved | Projet d'int  gration |
                                <a href="index.html">seed-IT.eu</a></p>
                </div>
        </body>
</html>								