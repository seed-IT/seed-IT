@extends('layouts/templateAll')

@section('contenu')
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection

@section('content')
    <br>
        <div class="col-sm-offset-3 col-sm-6">
                <div class="panel panel-info">
                        <div class="panel-heading"> <h2> Contactez-nous </h2>
                                                                                 <h2> <a> Accueil </a></h2>
                        </div>
                        <div class="panel-body">
                                {!! Form::open(['url' => 'contact']) !!}
                                        <div class="form-group {!! $errors->has('nom') ? 'has-error' : '' !!}">
                                                {!! Form::text('nom', null, ['class' => 'form-control', 'placeholder' => 'Votre nom']) !!}
                                                {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                                        </div>
                                        <div class="form-group {!! $errors->has('email') ? 'has-error' : '' !!}">
                                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Votre email']) !!}
                                                {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                                        </div>
                                        <div class="form-group {!! $errors->has('texte') ? 'has-error' : '' !!}">
                                                {!! Form::textarea ('texte', null, ['class' => 'form-control', 'placeholder' => 'Votre message']) !!}
                                                {!! $errors->first('texte', '<small class="help-block">:message</small>') !!}
                                        </div>
                                        {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                                {!! Form::close() !!}
                        </div>
                </div>
        </div>
@endsection