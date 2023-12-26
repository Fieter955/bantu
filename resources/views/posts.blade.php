@extends('templete')
@section('container')

    @foreach($posts as $post)
      <a href="posts/{{ $post['slug'] }}"><h1>{{ $post['title'] }}</h1></a>
      <p>{{ $post['excerpt'] }}</p> 
    @endforeach 

@endsection
