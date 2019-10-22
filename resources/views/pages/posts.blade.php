@extends('layouts.default')
@section('content')
<div class="container">
    @foreach ($posts as $post)
        <div class="row">
            <div class="card mt-5">
                <div class="card-header">
                  {{$title}}
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$post->title}}</h5>
                  <p class="card-text">{{$post->content}}</p>
                  <a href="#" class="btn btn-primary">leia mais...</a>
                  <hr>
                </div>
              </div>
        </div>
    @endforeach
</div>
@stop