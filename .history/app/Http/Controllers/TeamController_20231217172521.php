<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getProudcts(){
        $product=["pro1","pro2","pro3"];
        return view("proudct",["proudct"=>$product]);
        }
}
