<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // get all posts
    public function index()
    {
        $allPosts = [
            ['id' => 1, 'title' => 'PHP', 'posted_by' => 'John Doe', 'created_at' => '2024-01-01'],
            ['id' => 2, 'title' => 'JavaScript', 'posted_by' => 'Ahmed', 'created_at' => '2024-01-02'],
            ['id' => 3, 'title' => 'HTML', 'posted_by' => 'Mohamed', 'created_at' => '2024-01-05'],
            ['id' => 4, 'title' => 'CSS', 'posted_by' => 'Alice', 'created_at' => '2024-02-10'],

        ];
        return view('posts.index', ['posts' => $allPosts]);
    }

    // show a single post
    public function show($id)
    {
        $allPosts = [
            ['id' => 1, 'title' => 'PHP', 'posted_by' => 'John Doe', 'created_at' => '2024-01-01'],
            ['id' => 2, 'title' => 'JavaScript', 'posted_by' => 'Ahmed', 'created_at' => '2024-01-02'],
            ['id' => 3, 'title' => 'HTML', 'posted_by' => 'Mohamed', 'created_at' => '2024-01-05'],
            ['id' => 4, 'title' => 'CSS', 'posted_by' => 'Alice', 'created_at' => '2024-02-10'],
        ];
        // Logic to retrieve a single post by its ID
        return view('posts.show', ['post' => $allPosts[$id - 1]]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // Logic to store a new post
        // get data from request, validate, save to database, etc.
        $request = request();
        $title = $request->input('title');
        $description = $request->input('description');
        $posted_by = $request->input('post_creator');
        // dd("Storing post: $title, $description, by $posted_by");
        // redirect to home
        return to_route('posts.index');
    }
}
