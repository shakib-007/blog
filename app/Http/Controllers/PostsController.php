<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    
    public function postList()
    {
        $posts1 = new Post();
    }

    public function index()
    {
        
        $posts = Post::orderBy('created_at','desc')->get();
        // $posts = Post::orderBy('created_at','desc')->take(1)->get();
        // $posts = Post::orderBy('created_at','desc')->paginate(2);
        return view('page.index')->with('posts',$posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        // return 123;
        // return view('posts.create');

        $post =  new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/posts')->with('success','post created');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post =  Post::find($id);
        // return $request->title;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect('/posts')->with('success','post updated');
    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts')->with('success','post deleted');

    }
 }
