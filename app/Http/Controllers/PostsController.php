<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }


    /***
     * this will handle a post method, so what it should do is the following:
     * 1.create a new post using the request data.
     * 2.save the post to the database.
     * 3.redirect to the home page.
     */
    public function store(){
        $this->validate(request(),[
           'title' => 'required',
            'body' => 'required'
        ]);

        //1.create a new post with request data
        $post = new Post();
        $post->title = request('title');
        $post->body = request('body');
        //2.save post to db
        $post->save();
        //3.redirect to homepage.
        return redirect('/');
    }
    
    public function show($id){
            $post = Post::find($id);
            return view('posts.show', compact('post'));
    }
}


