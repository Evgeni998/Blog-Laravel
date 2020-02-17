@extends('layout')

@section('content')
    <h1>Edit Article</h1>
    {!!Form::open(['action' => ['PostsController@updateArticle', $article->id], 'method'=>'POST'])!!}
    {{ method_field('PUT') }}
        <div class = "form-group container">  
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $article->title, ['class' => 'form-control', 'placeholder'=>'title'])}}
        </div>
        <div class = "form-group container">
            {{Form::label('category_id', 'Category')}}
             <select class = "form-control" name = "category_id">
                @foreach ($categories as $category)
                    <option value = {{$category->c_id}}>{{$category->category_title}}</option>                    
                @endforeach
              
           </select>
        </div>
        <div class = "form-group container">
            {{Form::label('keywords', 'Key Words')}}
            {{Form::text('keywords', $article->keywords, ['class' => 'form-control', 'placeholder'=>'KeyWords'])}}
        </div>
        <div class = "form-group container">
            {{Form::label('text', 'Text')}}
            {{Form::textarea('text', $article->text, ['class' => 'form-control', 'placeholder'=>'text'])}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
       
    {!! Form::close()!!}
@endsection