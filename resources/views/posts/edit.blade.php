@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
<form action="/update/{{$post->id}}" method="post">
    @csrf
    <table>
        <tr>
            <td><b>Title</b></td>
        </tr>
        <tr>
            <td><input type="text" name="title" value="{{$post->title}}"  size="100"></td>
        </tr>
        <tr>
            <td><b>Body</b></td>
        </tr>
        <tr>
            <td><textarea name="body" cols="102" rows="5">{{$post->body}}</textarea></td>
        </tr>
        <tr>
            
            <td><input type="submit"></td>
        
        </tr>
    </table>
</form>
@endsection