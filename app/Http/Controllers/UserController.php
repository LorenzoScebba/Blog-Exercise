<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    public function role(Request $request){

        if(!Auth::user()->isAdmin() || !Auth::check()){
            return abort(401);
        }

        $user = User::find($request->user);
        $user->role_id = $request->role;
        $user->save();

        return back()->with("status","User Role Edited");
    }
}
