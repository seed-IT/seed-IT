<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Boutique | Seed-it</title>
		<link href="{{ asset('css/default.css') }}" rel="stylesheet" type="text/css" media="all">
		<style> textarea { resize: none; } </style>
	</head>
  <body>
    <div id="header" class="container">
			<div id="logo">
				<h1><a href="#"><img src="{{ asset('images/seed-it-logo.png') }}"></a></h1>
			</div>

			<div id="menu">
				<ul>
					<li><a href="{{url('accueil')}}">Acceuil</a></li>
					<li><a href="{{url('seedit')}}">Seed-IT</a></li>
					<li><a href="{{url('posts')}}">Boutique</a></li>
					<li><a href="{{url('login')}}">Connexion</a></li>
					<li><a href="{{url('contact')}}">Contact</a></li>
					
				</ul>
			</div>
		
        @yield('header')
      </div>
    </header>
	<div id="page">
    <div class="container">
      @yield('contenu')
    </div>
	</div>
	<div id="copyright" class="container">
			<p>2019-2020 &copy; All rights reserved | Projet d'intégration |
				<a href="index.html">seed-IT.eu</a></p>
		</div>
  </body>
</html>