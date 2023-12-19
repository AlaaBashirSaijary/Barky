<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getteam(){
        $product=["pro1","pro2","pro3"];
        return view("proudct",["proudct"=>$product]);
        }
}
