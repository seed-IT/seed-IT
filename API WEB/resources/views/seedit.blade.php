<!doctype html>

<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Seed-it</title>
		 <link href="{{ asset('css/seed-it.css') }}" rel="stylesheet" type="text/css" media="all">
	
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
		</div>
		
		<div id="page">
  	<div id="articleBox" class="tboxContainer">
			<div class="tbox1">
				<h2>Hymed Boussaklatan</h2>
				<img src="{{ asset('images/hymed.jpg') }}" alt="Hymed" class="img">
		          <div id="menu">
		            <ul>
		              <li>
		                <p>Web service</p>
		              </li>
		              <li>
		                <p>Web developper</p>
		              </li>
									<li>
										<p>API Web</p>
									</li>
		            </ul>
		          </div>
			</div>
		<div class="tbox2">
		  <h2>Nathan Henry</h2>
			<img src="{{ asset('images/nathan.jpg') }}" alt="Nathan" class="img">
		      <div id="menu">
		        <ul>
		          <li>
		            <p>Database architect</p>
		          </li>
		          <li>
		            <p>Web developper</p>
		          </li>
		        </ul>
		      </div>
			</div>
	</div>
  <div id="articleBox" class="tboxContainer">
		<div class="tbox1">
			<h2>Constantin Mirica</h2>
			<img src="{{ asset('images/Constantin.jpg') }}" alt="Constantin" class="img">
          <div id="menu">
            <ul>
              <li>
                <p>Rasberry Pi Programmer</p>
              </li>
              <li>
                <p>Marketing Manager</p>
              </li>
            </ul>
          </div>
	 </div>
		<div class="tbox2">
	      <h2>Melvin Campos Casares</h2>
				<img src="{{ asset('images/Melvin.jpg') }}" alt="Melvin" class="img">
	          <div id="menu">
	            <ul>
	              <li>
	                <p>Rasberry Pi Programmer</p>
	              </li>
	              <li>
	                <p>Communication Manager</p>
	              </li>
	            </ul>
	          </div>
		</div>
	</div>
  	<div id="articleBox" class="tboxContainer">
        <div class="tbox1">
          <h2>Filipp Shatskiy</h2>
          <img src="{{ asset('images/Fillip.jpg') }}" alt="Filipp" class="img">
          <div id="menu">
            <ul>
              <li>
                <p>Database architect</p>
              </li>
              <li>
                <p>Marketing Manager</p>
              </li>
            </ul>
          </div>
        </div>
    <div class="tbox2">
        <h2>Hubert Van De Walle</h2>
        <img src="{{ asset('images/Hubert.png') }}" alt="Hubert" class="img">
          <div id="menu">
            <ul>
              <li>
                <p>Service database consultant</p>
              </li>
              <li>
                <p>API java</p>
              </li>
            </ul>
          </div>
        </div>
  	</div>
  	<div id="articleBox" class="tboxContainer">
		<div class="tbox2">
        <h2>Antoine Hoebaer</h2>
        <img src="{{ asset('images/Antoine.jpg') }}" alt="Antoine" class="img">
        <div id="menu">
          <ul>
            <li>
              <p>Database architect</p>
            </li>
            <li>
              <p>Web developper</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
	</div>
		<div id="copyright" class="container">
			<p>2019-2020 &copy; All rights reserved | Projet d'intégration |
				<a href="index.html">seed-IT.eu</a></p>
		</div>
	</body>
</html>
