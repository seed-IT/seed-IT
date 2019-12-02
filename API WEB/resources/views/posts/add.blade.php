@extends('layouts/templateAll')
@section('contenu')
<link href="{{ asset('css/contact.css') }}" rel="stylesheet">
@endsection
@section('content')
        <br>
        <div class="col-sm-offset-3 col-sm-6">
                <div class="panel panel-info">
                        <div class="panel-heading">Ajout d'un article</div>
                        <div class="panel-body">
                                {!! Form::open(['route' => 'post.store']) !!}
                                        <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                                                {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Nom de la graine et description']) !!}
                                                {!! $errors->first('titre', '<small class="help-block">:message</small>') !!}
                                        </div>
                                        <div class="form-group {!! $errors->has('contenu') ? 'has-error' : '' !!}">
                                                {!! Form::textarea ('contenu', null, ['class' => 'form-control', 'placeholder' => 'Ajouter des conseils pour planter les graines ']) !!}
                                                {!! $errors->first('contenu', '<small class="help-block">:message</small>') !!}
                                        </div>
                                        {!! Form::submit('Envoyer !', ['class' => 'btn btn-info pull-right']) !!}
                                {!! Form::close() !!}
                        </div>
                </div>
                <a href="javascript:history.back()" class="btn btn-primary">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
                </a>
        </div>
@endsection