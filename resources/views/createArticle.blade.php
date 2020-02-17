@extends('layout')

@section('content')
    <h1>Create Article</h1>
    {!!Form::open(['action' => 'PostsController@storeArticle', 'method'=>'POST'])!!}
        <div class = "form-group container">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder'=>'title'])}}
        </div>

        <div class = "form-group container">
            {{Form::label('category_id', 'Category')}}
            <!-- Loop throug the categories in the database and match the category_id with the id field in Articles table -->
           <select class = "form-control" name = "category_id">
                @foreach ($categories as $category)
                    <option value = {{$category->c_id}}>{{$category->category_title}}</option>                    
                @endforeach
              
           </select>
        </div>

        <div class = "form-group container">
            {{Form::label('keywords', 'Key Words')}}
            {{Form::text('keywords', '', ['class' => 'form-control', 'placeholder'=>'KeyWords'])}}
        </div>

        <div class = "form-group container">
            {{Form::label('text', 'Text')}}
            {{Form::textarea('text', '', ['class' => 'form-control', 'placeholder'=>'text'])}}
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>

    {!! Form::close()!!}
@endsection