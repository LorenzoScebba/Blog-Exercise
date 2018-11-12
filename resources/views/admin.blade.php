@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h4>Administration page</h4>
        <hr>

        <div class="row mb-3">
            <div class="btn btn-block btn-info " data-toggle="modal" data-target="#changeUserRole">Change User Role
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="changeUserRole" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{route("user.change.role")}}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title">Change User Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <label for="user">User:</label>
                            <select name="user" id="user" class="custom-select">
                                @foreach($users as $user)
                                    @if($user->id !== Auth::user()->id)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <hr>
                            <label for="role">New Role:</label>
                            <select name="role" id="role" class="custom-select">
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="btn btn-block btn-primary" data-toggle="modal" data-target="#createCategory">Create a Category
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="createCategory" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{route("category.new")}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <h4 class="modal-title">Create a new Category</h4>
                            <hr>
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                       placeholder="Category name" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="btn btn-block btn-success" data-toggle="modal" data-target="#moderateComments">Moderate comments
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="moderateComments" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form action="{{route("comment.approve")}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <h4 class="modal-title">Moderate Comments</h4>
                            <hr>
                            <select name="id" title="Comment" class="custom-select">
                                @foreach($comments as $comment)
                                    <option value="{{$comment->id}}">{{$comment->content}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Approve</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
