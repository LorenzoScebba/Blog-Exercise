<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PostController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware("auth");
        $categories = Category::all();
        View::share("categories",$categories);
    }

    public function view($id){
        $post = Post::find($id);
        return view("post",compact("post"));
    }

    public function create(Request $request){

        if(!Auth::user()->canPost()){
            abort(401);
        }

        $post = new Post;

        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category;
        $post->content = $request->text;

        $post->save();
        MailController::post($post);

        return back()->with("status", "Post Created!");
    }

    public function edit($id, Request $request){
        $post = Post::find($id);
        if($post->user_id !== Auth::user()->id){
            abort(401);
        }
        else{
            $post->content = $request->text;
            $post->category_id = $request->category;
            return back()->with("status","Post Edited!");
        }
    }

    public function delete($id){
        $post = Post::find($id);
        if($post->user_id !== Auth::user()->id && !Auth::user()->isAdmin()){
            return abort(401);
        }else{
            try {
                $post->comments()->delete();
                $post->delete();
            } catch (\Exception $e) {
                abort(500);
            }
            return back()->with("status","Post Deleted!");
        }
    }
}
