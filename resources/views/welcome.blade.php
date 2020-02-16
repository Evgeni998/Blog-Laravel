@extends('layout')

@section('content')

<div class = "container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/articles">Blog</a>
        </li> 
        </li>   
          <a class="nav-link " href="/articles/create" tabindex="-1" aria-disabled="true">Create Post</a>        
      </ul> 
    </div>
  </nav>

</div>

@endsection