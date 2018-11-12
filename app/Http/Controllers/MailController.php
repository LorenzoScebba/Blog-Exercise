<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public static function post(Post $post)
    {
        foreach (User::all() as $user) {
            if ($user->isAdmin()) {
                Mail::send("mail", ["name" => $user->name, "text" => "A new post has been created!"], function (Message $m) use ($user) {
                    $m->from("info@blog.com", "Lorenzo Scebba's blog");
                    $m->to($user->email, $user->name);
                    $m->subject("New post!");
                });
            }
        }
    }

    public static function approve(Comment $comment)
    {
        foreach (User::all() as $user) {
            if ($user->isAdmin()) {
                Mail::send("mail", ["name" => $user->name, "text" => "A new comment has been posted, please moderate it"], function (Message $m) use ($user) {
                    $m->from("info@blog.com", "Lorenzo Scebba's blog");
                    $m->to($user->email, $user->name);
                    $m->subject("New Comment!");
                });
            }
        }
    }
}
