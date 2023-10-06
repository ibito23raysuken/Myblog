@extends('base')

@section('content')
<div class="jumbotron">
    <div class="container  p-5">
        <h1 class="display-3 text-center">ARTICLES</h1>
        <div class="articles row justify-content-center">
            @foreach ($articles as $article )
                <div class="col-md-6">
                    <div class="card text-bg-light mb-3 " style="width: 15cm;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $article->title }}</h5>
                          <p class="card-text">{{ $article->slug }}</p>
                          <a href="{{ route('route_article',$article->slug) }}" class="btn btn-primary">Lire la suite
                            <i class="fas fa-arrow-right"></i>
                          </a>
                        </div>
                      </div>
                </div>
            @endforeach
    </div>
    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links('vendor/pagination/custom') }}

    </div>
</div>
@endsection
