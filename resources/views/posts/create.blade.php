@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
<form action="/store" method="post">
    @csrf
    <table>
        <tr>
            <td><b>Title</b></td>
        </tr>
        <tr>
            <td><input type="text" name="title" placeholder="title" size="100"></td>
        </tr>
        <tr>
            <td><b>Body</b></td>
        </tr>
        <tr>
            <td><textarea name="body" cols="102" rows="5" placeholder="body text will here"></textarea></td>
        </tr>
        <tr>
            
            <td><input type="submit"></td>
        
        </tr>
    </table>
</form>
@endsection