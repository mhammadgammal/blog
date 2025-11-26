@extends('layouts.app')

@section('title')
    Edit Post
@endsection

@section('content')
    <form method="POST" action="{{ route('posts.update', [$post['id']]) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name="title" type="text" class="form-control" value="{{ $post['title'] }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select name="post_creator" class="form-control">
                <option value="1" {{ $post['posted_by'] == 'Ahmed' ? 'selected' : '' }}>Ahmed</option>
                <option value="2" {{ $post['posted_by'] == 'Mohamed' ? 'selected' : '' }}>Mohamed</option>
            </select>
        </div>

        <button class="btn btn-success">Submit</button>
    </form>
@endsection
