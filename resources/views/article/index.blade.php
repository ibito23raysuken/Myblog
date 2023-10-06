@extends('base')

@section('content')
<div class="container">

    <h1 class="display-3 text-center">liste des Articles </h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-5" href="{{ route('article.create') }}"><i class="fas fa-plus mx-2"></i> Ajouter Article</a>
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">TITRE</th>
            <th scope="col">CREER LE </th>
            <th scope="col">ACTION</th>
          </tr>
        </thead>

        @foreach ($articles as $article)
            <tbody>
                <tr>
                <th scope="row">{{ $article->id }}</th>
                <td>{{ $article->title }}</td>
                <td>{{ $article-> dateFormated()}}</td>
                <td class="d-flex">
                    <a  type="button" class="btn btn-warning mx-3" href="{{ route('article.edit',$article->id) }}">Modifier</a>
                    <button  class="btn btn-danger mx-3" onclick="document.getElementById('myModal-{{ $article->id }}').style.display='block' " >Supprimer</button>
                    @include('incs.modal')
                </td>
                </tr>
            </tbody>
        @endforeach
        <div class="d-flex justify-content-center mt-5">
            {{ $articles->links('vendor/pagination/custom') }}

        </div>
      </table>
</div>
@endsection
