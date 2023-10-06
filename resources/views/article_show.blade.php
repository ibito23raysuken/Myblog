@extends('base')

@section('content')
<div class="jumbotron">
    <div class="container  p-5">
        <h1 class="display-3 text-center">{{ $article->title}}</h1>
        <h2 class="display-10 text-center my-5">{{ $article->subtitle}}</h2>
        <div class="articles row justify-content-center">
            {!! $article->contenue !!}
        </div>
        <a class="my-5" ><a class="btn btn-primary" href="{{ route('articles') }}" > <i class="fas fa-arrow-left ml-3"> RETOUR</i></a>
    </div>
</div>
@endsection
