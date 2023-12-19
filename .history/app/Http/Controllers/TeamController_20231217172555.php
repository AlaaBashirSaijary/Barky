<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getteam(){
        $product=DB::select('select * from users where active = ?');
        return view("proudct",["proudct"=>$product]);
        }
}
