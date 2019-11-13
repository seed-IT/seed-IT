<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
		  <title>Profil | Seed-it </title>
		  <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ asset('css/profil.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/default.css') }}" rel="stylesheet">
</head>

		

    
<body>

<div id="header" class="container">
			<div id="logo">
				<h1><a href="#"><img src="images/seed-it-logo.png" alt="logo de seed-it.eu"></a></h1>
			</div>

        <div class="container">
                        
			<div id="menu">
					<ul>
					<li><a href="{{url('accueil')}}">Acceuil</a></li>
					<li><a href="{{url('seedit')}}">Seed-IT</a></li>
					<li><a href="{{url('posts')}}">Boutique</a></li>
					<li><a href="{{url('login')}}">Connexion</a></li>
					<li><a href="{{url('contact')}}">Contact</a></li>
					
				
	   
							@guest
							   
								 <h2>   <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>  </h2> 
							   
								@if (Route::has('register'))
									
								   <h2>       <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> </h2>
									
								@endif
							@else
								<li class="nav-item-dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<div  class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
										   onclick="event.preventDefault();
														 document.getElementById('logout-form').submit();">
											{{ __('Logout') }}
										</a>
					</ul>
									</div>
			</div>
		 </div>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
           
		   </ul>
		   
     <div id="articleBox" class="tboxContainer">
            @yield('content')
			</div>
			
       <div id="copyright" class="container">
      <p>2019-2020 &copy; All rights reserved | Projet d'intégration |
        <a href="index.html">seed-IT.eu</a></p>
    </div>

	</div>
       
</body>
</html>
