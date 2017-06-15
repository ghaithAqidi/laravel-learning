@extends('layouts.layout')

@include('layouts.nav')

@section('content')
    <div class="container">
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">body</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="body">
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Public post</button>
                </div>
            </div>
        </form>
    </div>

@endsection



