<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('Login | Seed-it') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/signIn.css') }}" rel="stylesheet">
</head>
<body>

        <div class="container">

         <div id="formulaire">
                 @guest

                             <h2>   <a class="nav-link" href="{{ url('accueil') }}">{{ __('Accueil') }}</a>  </h2>

                            @if (Route::has('register'))

                               <h2>       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> </h2>

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
                <script src="{{ asset('js/storm.js') }}" defer></script>
				
                                                                                                                                                                                               
			@yield('content')
    
	</div>
        </div>
</body>
</html>