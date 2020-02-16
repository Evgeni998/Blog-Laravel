@extends('layout')

@section('content')

<div class = 'container mt-5'>
    <a href="/articles" class = "btn btn-outline-secondary">Back</a>
<h1>{{$article->title}}</h1>
<br>
<p>{{$article->text}}</p>
<a href="{{$article->id}}/edit" class = "btn btn-outline-secondary">Edit</a>
{!!Form::open(['action'=> ['PostsController@deleteArticle', $article->id], 'method'=> 'POST', 'class' => "float-right"])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
</div>


@endsection