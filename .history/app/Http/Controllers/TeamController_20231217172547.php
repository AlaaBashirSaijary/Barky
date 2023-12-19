<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getteam(){
        $product=DB::select('select * from users where active = ?', [1]);
        return view("proudct",["proudct"=>$product]);
        }
}
