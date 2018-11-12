<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create($id,Request $request){

        if(!Auth::user()->canPost()){
            abort(401);
        }

        $comment = new Comment;

        $comment->user_id = Auth::user()->id;
        $comment->post_id = $id;
        $comment->content = $request->comment;

        $comment->save();
        MailController::approve($comment);
        return back()->with("status", "Comment in revision fase!");
    }

    public function approve(Request $request){
        if(!Auth::user()->isAdmin() || !Auth::check()){
            return abort(401);
        }
        $comment = Comment::find($request->id);
        $comment->is_revisioned = true;
        $comment->save();

        return back()->with("status","Comment approved!");
    }
}
