@extends('base')

@section('content')
<div class="container">

    <h1 class="display-3 text-center">Editer un article</h1>

    <form method="POST" action="{{ route('article.update',$article) }}">
        @method("PUT")
        @csrf
        <div class="col-12 my-3">
            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" value="{{ $article->title }}" class="form-control @error('title') is-invalid @enderror" placeholder="Titre de votre Article"/>
            </div>
            @error('title')
                <span role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label>Subtitle</label>
                <input type="text" name="subtitle" value="{{ $article->subtitle }}" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Sous*-titre de votre Article"/>
                <small class="form-text text-muted">Decrtiver le contenu de votre article</small>
            </div>

            @error('subtitle')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>
        <div class="col-12 my-3">
            <div class="form-group">
                <label>Contenue</label>
                <textarea  type="text" name="contenue" {{ $article->contenue }}   class="form-control @error('contenue') is-invalid @enderror">
                    {{ $article->contenue }}
                </textarea>
            </div>
            @error('contenue')
            <span role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="d-flex justify-content-center">
               <button type="submit" class="btn btn-primary">Poster</button>
        </div>
    </form>
</div>

<script>
    tinymce.init({
      selector: '#tinycme-editor'
    });
  </script>
@endsection
