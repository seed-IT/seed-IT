<!DOCTYPE html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>S'inscrire | Seed-it</title>
		<link href="css/signUp.css" rel="stylesheet" type="text/css" media="all" />

	</head>
	<body>
		<div class="container">
		  <form>
			<div  id="inputText" class="row">
			  <h4>Compte</h4>
			  <div id="inputTexte">
				<input type="texte" placeholder="Nom complet"/>
				<div class="input-icon"><i class="fa fa-user"></i></div>
			  </div>
			  <div id="inputTexte" >
				<input type="email" placeholder="Adresse mail"/>
				<div class="input-icon"><i class="fa fa-envelope"></i></div>
			  </div>
			  <div id="inputText" >
				<input type="password" placeholder="Mot de passe"/>
				<div class="input-icon"><i class="fa fa-key"></i></div>
			  </div>
			</div>
			<div id="inputDate" class="row">
			  <div id="inputDate" class="col-half">
				<h4>Année de naissance</h4>
				<div >
				  <div id="inputDate" class="col-third">
					<input type="text" maxlength="2" placeholder="JJ"/>
				  </div>
				  <div id="inputDate" class="col-third">
					<input type="text" maxlength="2" placeholder="MM"/>
				  </div>
				  <div id="inputDate" class="col-third">
					<input type="text" maxlength="4" placeholder="AAAA"/>
				  </div>
				</div>
			  </div>
			</div>

     
			<div id="radioConf" class="row">
			  <h4>Terms and Conditions</h4>
			  <div id="radioConf" class=input-group">
				<input type="checkbox" id="terms"/>
				
				<label for="terms">J'accepte les conditions générales d'inscription à ce service et confirme par la présente avoir pris connaissance de la politique de confidentialité</label>
				<button type="submit" form="form" > Fini ! </button>
			  </div>
			</div>
		  </form>
		</div>
	</body>
</html>
