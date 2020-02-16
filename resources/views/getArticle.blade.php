@extends('layout')

@section('content')
<h1 class = "container ">Articles</h1>

    @if(count($articles) > 0)
    @foreach ($articles as $article)
        <div class="container card p-3 mt-3 mb-3"> 
        <h3><a href = "/articles/{{$article->id}}">{{$article->title}}</a></h3>
        </div>
    @endforeach
    @else 
     <p>No Articles</p>
    @endif
@endsection