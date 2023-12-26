<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\

class ApiController extends Controller
{
    public function getUsers(){
        $users = User::all();
        return $users;
    }
}
