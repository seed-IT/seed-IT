@extends('layouts.templateAll')
@section('contenu')
<link href="{{ asset('css/create.css') }}" rel="stylesheet">
<script src="{{ asset('js/hidden.js') }}" defer></script>
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <script src ="{{ url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js')}}"></script>
<script src="{{ asset('js/grapheTest2.js') }}"></script>
@endsection
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



                  <div id="main" class="container">
                        <div class="row">
                          <div class="col">

                                         <form method="GET" action="{{ url('/prime') }}">
                                         <button type="submit" value="Ajouter une annonce" class="col" >

                           Passer à la vitesse supérieur !
                  </button></form>

                                          <input type="button" class="btn btn-success" value="Mes annonces">
                                  </div>
                                </div>
                          </div>

                          <div class="col">
                <input type="button" onclick="toggle('FaireDisparaitre')" value="Mes graines">

                  <div id="FaireDisparaitre" style="visibility:hidden">
                        <div class="container">
    <canvas id="myChart"></canvas>
</div>
                </div>
                                 <form method="GET" action="{{ url('post/create') }}">
                                         <button type="submit" value="Ajouter une annonce" class="col" >

                           Ajouter une annonce
                  </button></form>

                                                @if(Auth::check() and Auth::user()->admin)

                                        <form method="GET" action="{{ url('user')}}">
                                        <button type="submit" value="Gestion des utilisateurs">
                                        Gestion des utilisateurs </button></form>
                                        @endif
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection