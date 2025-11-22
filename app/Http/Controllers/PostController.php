<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
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
}
