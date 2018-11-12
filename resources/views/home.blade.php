@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="row">

            <div class="col-3">
                @include("cards.category", ["categories" => $categories])
            </div>

            <div class="col-7">

                @if(Auth::user()->canPost())
                    @include("cards.post-create", ["categories" => $categories])
                @endif

                @foreach($posts as $post)
                    @include("cards.post-short", ["post" => $post])
                @endforeach
            </div>


        </div>

    </div>

@endsection
