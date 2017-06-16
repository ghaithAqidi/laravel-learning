@extends('layouts.layout')

@include('layouts.nav')

@section('content')
    <div class="col-sm-8 blog-main">
        @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title">{{$post -> title}}</h2>
                <!-- example of the use of the carbon library
                http://carbon.nesbot.com/docs/#api-getters
                -->
                <p class="blog-post-meta">{{$post -> created_at->toFormattedDateString() }}</p>
                {{$post -> body}}
            </div>
        @endforeach
    </div>
@endsection

