@extends('layouts.app')

@section('content')
    <h1>Список статей:</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Name</th>
            <th scope="col">body</th>
          </tr>
        </thead>
        @foreach ($articles as $article)
        <tbody>
          <tr>
            <th scope="row">{{$article->id}}</th>
            <td><a href="{{ route('articles.show', $article) }}">{{$article->name}}</a></td>
            <td>{{Str::limit($article->body, 30)}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>

      <a class="btn btn-outline-success" href="{{ route('articles.create') }}" role="button">Создать статью</a>
@endsection