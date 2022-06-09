@extends('layouts.app')

@section('content')
    <br>
    <a href="/posts" class="btn btn-primary">Go Back</a>

    <h1>{{ $post->title }}</h1>

    <div>
        <p>{{ $post->body }}</p>
    </div>
    <hr>
    <small>written on {{ $post->created_at }}</small>
    <hr>
    <br>
    <a href="/edit/{{$post->id}}" class="btn btn-primary">Edit</a>
@endsection
