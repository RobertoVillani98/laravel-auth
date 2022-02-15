@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="text-muted">{{$post->created_at}}</span>
                </div>

                <div class="card-body">
                    <h4 class="card-title">{{ $post->title }}</h4>
                    <p class="card-text">
                        {{ $post->content }}
                    </p>
                </div>
            </div>
            <a href="{{route('posts.index')}}" class="btn btn-primary mt-4">Torna ai posts</a>
        </div>
    </div>
</div>
@endsection