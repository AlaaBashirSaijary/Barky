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

    public function storePost(Request ){
        $post = new Post;
        // $validated = $requst->validate([

        //     'name' => 'required',
        // ]);
        $post->name=$requst->name;

        $post->user_id=$requst->user_id;
        $post->description=$requst->description;
        if($post->save()){
          return "Save Successfully";
        }
        else{
            return 'Save Failed';
        }

    }
}
