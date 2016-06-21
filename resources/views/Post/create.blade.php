@extends('layouts.master')

@section('title')
    Create New Post
@endsection

@section('top-navbar')
    @include('Shared.top-navbar')
@endsection

@section('left-navbar')
    @include('Shared.post-left-navbar')
@endsection

@section('content')
    <div class="container">
        <div class="col-md-10">
            <div class="page-wrapper">
                <div class="page-header" style="text-align: center">
                    <h1>Create New Post</h1>
                    <p>*You need to fill in all fields to create a new post</p>
                </div>

                <form method="POST" action="confirm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" placeholder="Enter the title of the post">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="body" placeholder="Enter the body of the post"></textarea>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection