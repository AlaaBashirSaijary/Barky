<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getteam(){
        $members=DB::select('select * from teams ');
        
        return view("proudct",["proudct"=>$product]);
        }
}
