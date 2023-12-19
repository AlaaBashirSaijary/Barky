<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    //
    public function getteam(){
        $member=DB::select('select * from teams ');
        return view("proudct",["proudct"=>$product]);
        }
}
