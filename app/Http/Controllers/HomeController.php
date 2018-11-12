<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $categories = Category::all();
        $roles = Role::all();
        View::share("categories",$categories);
        View::share("roles",$roles);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Request::get("category")){
            $posts = Post::whereCategoryId(Request::get("category"))->orderBy("created_at","desc")->get();
        }else {
            $posts = Post::orderBy("created_at", "desc")->get();
        }
        return view('home',compact("posts"));
    }

    public function profile($id){
        $user = User::find($id);
        return view("profile",compact("user"));
    }

    public function admin(){
        if(Auth::user()->isAdmin()){
            $users = User::all();
            $comments = Comment::all();
            return view("admin",compact("users","comments"));
        }
        return abort(401);
    }
}
