@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Nuovo Post</h2>
                </div>

                <div class="card-body">
                    
                </div>
            </div>
            <a href="{{route('posts.index')}}" class="btn btn-primary mt-4">Torna ai posts</a>
        </div>
    </div>
</div>
@endsection