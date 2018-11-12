@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h4>"{{$post->user->name}}" Post</h4>
        <hr>

        <div id="show">
            <div class="card mb-3">
                <div class="text-right mx-3 mt-1">
                    <a href="#" onclick="edit()"><i class="fas fa-pen"></i></a>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{$post->content}}
                    </p>
                </div>

                <div class="card-footer text-muted">
                    Date : {{$post->created_at}}<br>
                    Category : <b>{{$post->category->name}}</b>
                </div>
            </div>
        </div>

        <div id="edit" style="display: none">
            <form action="{{route("post.edit",["id"=>$post->id])}}" method="post">
                @csrf
                <div class="card mb-3">
                    <div class="card-body">
                        <textarea class="form-control" name="text" id="text" required>{{$post->content}}</textarea>
                        <div class="form-group">
                            <label for="category">Categoria</label>
                            <select class="custom-select" name="category" id="category">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-success">Done</button>
                        <a href="#" onclick="show()" class="btn btn-dark">Cancel</a>
                    </div>
                </div>
            </form>
        </div>

        <hr>
        <h4>Comments : </h4>

        @foreach($post->comments()->orderBy("created_at", "desc")->get() as $comment)

            @if($comment->is_revisioned )

                <div class="card mb-3">
                    <div class="card-body">
                        <p class="card-text">
                            {{$comment->content}}
                        </p>
                    </div>

                    <div class="card-footer text-muted">
                        By : {{$comment->user->name}}
                    </div>
                </div>

            @endif

        @endforeach

        <button type="button" class="btn btn-primary btn-lg btn-block mt-5" data-toggle="modal"
                data-target="#addComment">Add
            a comment
        </button>

        <!-- Modal -->
        <div class="modal fade" id="addComment" tabindex="-1" role="dialog">
            <form action="{{route("comment.new",["id" => $post->id])}}" method="post">
                @csrf
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add a comment!</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <textarea class="form-control" name="comment" id="comment" title="comment"
                                          required></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function edit() {
            $('#show').hide();
            $("#edit").show();
        }

        function show() {
            $("#edit").hide();
            $("#show").show();
        }
    </script>

@endsection
