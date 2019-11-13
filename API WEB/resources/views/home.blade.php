@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
			<div class="row">
			  <div class="col">
				<button id="btnLogOut" type="button" class="btn btn-danger">Logout</button>
			  </div>
			</div>
                   
		  <div id="main" class="container">
			<div class="row">
			  <div class="col">
				<button type="button" class="btn btn-primary">Passe à la vitesse supérieure !</button>
				<div class="row">
				  <div class="col">
					  <button type="button" class="btn btn-success">Mes annonces</button>
				  </div>
				</div>
			  </div>

			  <div class="col">
				<form class="NewAd" action="action_page.php" method="post">

				  <div class="formCase">
					<input id="Case1" type="text" name="" value=""placeholder="Nom des graines">
				  </div>

				  <div class="formCase">
					<select>
					  <option value="Fruit" selected >Fruit</option>
					  <option value="Légume">Légume</option>
					  <option value="Arbre">Arbre</option>
					  <option value="Fleur">Fleur</option>
					</select>
				  </div>

				  <div class="formCase">
					  <select>
						<option value="Été" selected >Été</option>
						<option value="Automne">Automne</option>
						<option value="Hiver">Hiver</option>
						<option value="Printemps">Printemps</option>
					  </select>
				  </div>

				  <div class="formCase">
					<input type="submit" name="" value="Valider">
				  </div>

				</form>
			</div>
		  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
