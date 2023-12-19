<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\;

class TeamController extends Controller
{
    //
    public function getteam(){
        $members=DB::select('select * from teams ');
        foreach($members as $member){
            each($member);
        }
       // return view("proudct");
        }
}
