@extends('layouts.master')

@section('title')
    Manage Post
    @endsection

@section('top-navbar')
    @include('Shared.top-navbar')
    @endsection

@section('left-navbar')
    @include('Shared.post-left-navbar')
    @endsection

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
        <div class="page-wrapper">
            <div class="jumbotron">
                <h1>Posts Management</h1>
                <p>You can manage all your posts here</p>
            </div>
            @foreach($posts as $post)
                <div class="manage-button" style="float: right; padding: 10px">
                    <a href="/posts/edit/{{ $post->id }}" class="btn btn-primary" role="button" >Edit</a>
                    <button onclick="deleteButtonPressed()" class="btn btn-danger">Delete</button>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>
                    <div class="author">Posted by: {{ $user->fullname }} &nbsp;&nbsp;&nbsp;Published at: {{ $post->created_at }}</div><hr>
                    <p class="panel-body">{{ $post->body }}</p>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    @endsection