<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    //
    public function getteam(){
        $members=DB::select('select * from users where active = ?', [1]);
        dd( $members);
        foreach($members as $member){
            each($member);
        }
       // return view("proudct");
        }
}