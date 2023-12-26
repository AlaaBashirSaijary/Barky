<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\

class ApiController extends Controller
{
    public function getUsers(){
        $users = User::all();
        return $users;
    }
}
