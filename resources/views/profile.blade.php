@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h4>"{{$user->name}}" Posts</h4>

        <small>
            Role:
            {{$user->role->name}}
        </small>
        <hr>
        @foreach($user->posts()->orderBy("created_at","desc")->get() as $post)
            @include("cards.post-short", ["post" => $post])
        @endforeach
    </div>
@endsection
