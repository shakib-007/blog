@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if( count($posts) > 0)
        @foreach ($posts as $post)
            <div class="container">
                
                <h5><a href="/posts/{{$post->id}}"> {{$post->title}}</a></h5>
                
                <small>{{$post->created_at}}</small>
            </div>
        @endforeach
        
    @else
        <p>no post foound</p>
    @endif
@endsection