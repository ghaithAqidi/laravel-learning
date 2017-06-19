@extends('layouts.layout')

@include('layouts.nav')

@section('content')

    <div class="col-sm-8 blog-main">
        <a href="/posts/create">Create New Post</a>

        @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title">
                    <a href="/posts/{{$post -> id}}">
                    {{$post -> title}}
                    </a>
                </h2>
                <!-- example of the use of the carbon library
                http://carbon.nesbot.com/docs/#api-getters
                -->
                <p class="blog-post-meta">{{$post -> created_at->toFormattedDateString() }}</p>
                {{$post -> body}}
            </div>
        @endforeach
    </div>
@endsection

