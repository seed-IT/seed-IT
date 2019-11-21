@extends('layouts.templateAll')

@section('content')
<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "none";
  }
}
</script>
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

			 <button onclick="myFunction()">Ajouter une annonce</button>
		  </div>
		  <div id="myDIV" style="display : 'none'">
This is my DIV element.
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
