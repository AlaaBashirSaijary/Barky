<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;

class ApiController extends Controller
{
    public function getUsers(){
        $users = User::all();
        return $users;
    }

    public function storePost(Request $requst){
        $post = new Comment;
        // $validated = $requst->validate([

        //     'name' => 'required',
        // ]);
        $post->name=$requst->name;
        $post->product_id=$requst->product_id;

        $post->message=$requst->message;
        $post->email=$requst->email;
        if($post->save()){
          return "Save Successfully";
        }
        else{
            return 'Save Failed';
        }

    }
}
