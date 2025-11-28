<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // get all posts
    public function index()
    {
        $posts = Post::all();
        // dd($posts);
        return view('posts.index', ['posts' => $posts]);
    }

    // show a single post
    public function show(Post $post)
    {
        // Logic to retrieve a single post by its ID
        return view('posts.show', ['post' => $post]);
    }

    public function create()
    {
        $user = User::all();
        return view('posts.create', ['users' => $user]);
    }

    public function store()
    {
        // Logic to store a new post
        // get data from request, validate, save to database, etc.
        $request = request();
        // $post = new Post();
        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            
        ]);
        // $post->title = $request->input('title');
        // $post->description = $request->input('description');
        // $post->save();
        // dd("Storing post: $title, $description, by $posted_by");
        // redirect to home
        return to_route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Post $post)
    {
        echo "Updating post with ID: {$post->id}";
        return to_route('posts.index');
    }
    public function destroy($id)
    {
        return to_route('posts.index');
    }
}
