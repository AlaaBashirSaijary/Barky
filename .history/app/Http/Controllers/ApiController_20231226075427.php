<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ApiController extends Controller
{
    public function getUsers(){
        $users = User::all();
        return $users;
    }

    public function storePost(){
        $post = new Post;
        $validated = $requst->validate([
            'email' => 'required|max:255',
            'name' => 'required',
        ]);
        $comment->name=$requst->name;

        $comment->email=$requst->email;
        $comment->message=$requst->message;
        $comment->save();
        return redirect("/comment");
    }
}
