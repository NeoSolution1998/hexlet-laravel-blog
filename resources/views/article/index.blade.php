@extends('layouts.app')
<br><br><br>
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
            <td>{{$article->name}}</td>
            <td>{{Str::limit($article->body, 30)}}</td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection