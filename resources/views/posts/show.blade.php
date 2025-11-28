@extends('layouts.app')
@section('title')
    {{ $post->title }}
@endsection
@section('content')
    <div class="card" style="margin:10px;">
        <div class="card">
            <div class="card-header">
                Post info
            </div>

        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{ $post->title }}</h5>
            <p class="card-text">Description: This is Description</p>
        </div>
    </div>
    <div class="card" style="margin:10px;">
        <div class="card">
            <div class="card-header">
                Post Creator Info
            </div>

        </div>
        <div class="card-body">
            <h5 class="card-title">Name: {{ $post->user ? $post->user->name : '' }}</h5>
            <p class="card-text">Created at: {{ $post->created_at }}</p>
        </div>
    @endsection
