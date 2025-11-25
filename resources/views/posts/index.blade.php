@extends('layouts.app')
@section('title')
    Posts List
@endsection
@section('content')
    <div class="text-center">
        <button type="button" class="btn btn-success">Create Post</button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post['id'] }}</th>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['posted_by'] }}</td>
                    <td>{{ $post['created_at'] }}</td>
                    <td><a href="{{ route('posts.show', ['id' => $post['id']]) }}" class="btn btn-info">View</a>
                        <a href="#" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
