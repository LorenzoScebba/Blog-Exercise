<div class="card mb-3">
    <div class="card-header">
        <div class="row">
            <div class="col d-flex align-items-center">
                <a href="{{route("profile",["id" => $post->user->id])}}">{{$post->user->name}}</a>
            </div>

            @if($post->user_id === Auth::user()->id || Auth::user()->isAdmin())
                <div class="col text-right">
                    @if($post->user_id === Auth::user()->id)
                        <a href="{{route("post.show",["id" => $post->id])}}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                    @endif
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete{{$post->id}}">
                        <i class="fas fa-trash-alt"></i></button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="Delete{{$post->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Delete this post?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{$post->content}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <form action="{{route("post.delete",["id" => $post->id])}}" method="post">
                                    @csrf
                                    {{method_field("delete")}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="card-body">
        <p class="card-text">
            {{str_split($post->content,50)[0]}} ...
        </p>
    </div>

    <div class="card-footer">
        <a href="{{route("post.show",["id" => $post->id])}}" class="btn btn-primary">Read Mode</a>
    </div>

    <div class="card-footer text-muted">
        Date : {{$post->created_at}}<br>
        Category : <b>{{$post->category->name}}</b>
    </div>
</div>



