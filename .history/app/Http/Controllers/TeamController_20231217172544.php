<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getteam(){
        $product=DB:se;
        return view("proudct",["proudct"=>$product]);
        }
}
