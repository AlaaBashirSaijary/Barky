<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    //
    public function getteam(){
        $members=DB::statement('drop table users');
        dd( $members);
        foreach($members as $member){
            each($member);
        }
       // return view("proudct");
        }
}
