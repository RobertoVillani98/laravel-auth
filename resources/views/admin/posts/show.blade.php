@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $post->title }}</h2>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <strong>Stato:</strong>
                        @if ($post->published)
                            <span class="badge badge-success">Pubblicato</span>
                        @else
                            <span class="badge badge-secondary">Bozza</span>
                        @endif
                    </div>
                    {{ $post->content }}
                </div>
            </div>
            <a href="{{route('posts.index')}}" class="btn btn-primary mt-4">Torna ai posts</a>
        </div>
    </div>
</div>
@endsection