
@extends('layouts/templateAll')



@section('content')
        @if(isset($info))
                <div class="row alert alert-info">{{ $info }}</div>
        @endif
        {!! $links !!}
        @foreach($posts as $post)
                <article class="row bg-primary">
                        <div class="col-md-12">

                                <section  id ="page" class="container">
                                <header>
                                        <h1>{{ $post->titre }}</h1>
                                </header>
                                        <hr>

                                        <p> Conseils : {{ $post->contenu }}</p>

                                        @if(Auth::check())
                                        <p> Comment me contacter : {{$post->contact }}</p>
                                        @endif
                                        <div id="info" >
                                        <p> Cliquez sur le tag pour filtrer vos recherche --> </p>
                                        </div>                                                                                                                                                                                                                                        <div id ="tag" class="tag">                                                                                                                                                                                                                 @foreach($post->tags as $tag)
                                        {!! link_to('post/tag/' . $tag->tag_url, $tag->tag,     ['class' => 'btn btn-xs btn-info']) !!}
                                                        @endforeach
                                        </div>
                                        <em class="pull-right">
                                                <span class="glyphicon glyphicon-pencil"></span> {{ $post->user->name }} le {!! $post->created_at->format('d-m-Y') !!}
                                        </em>
                                        @if(Auth::check() and Auth::user()->admin)
                                                {!! Form::open(['method' => 'DELETE', 'route' => ['post.destroy', $post->id]]) !!}
                                                        {!! Form::submit('Supprimer cet article', ['class' => 'btn btn-danger btn-xs ', 'onclick' => 'return confirm(\'Vraiment supprimer cet article ?\')']) !!}
                                                {!! Form::close() !!}
                                        @endif



                                </section>
                        </div>
                </article>
                <br>
        @endforeach
        {!! $links !!}
@endsection


