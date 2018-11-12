<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function new(Request $request)
    {
        $this->middleware("admin");

        Category::create([
           "name" => $request->name,
        ]);

        return back()->with("status","Category Created!");
    }
}
